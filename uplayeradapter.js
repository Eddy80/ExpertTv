/***

AdManager DFP Example

var prerollUrl = "http://pubads.g.doubleclick.net/gampad/ads?" +
   "sz=640x480" +
   "&iu=/1014799/Preroll-640x480" +
   "&ciu_szs=" +
   "&impl=s&" +
   "gdfp_req=1" +
   "&env=vp" +
   "&output=vast" +
   "&unviewed_position_start=1" +
   "&url=[referrer_url]" +
   "&impl=s" +
   "&correlator=";

var midrollUrl = "http://pubads.g.doubleclick.net/gampad/ads?" +
   "sz=640x480" +
   "&iu=/1014799/Midroll" +
   "&ciu_szs" +
   "&impl=s" +
   "&gdfp_req=1" +
   "&env=vp" +
   "&output=vast" +
   "&unviewed_position_start=1" +
   "&url=[referrer_url]" +
   "&description_url=[description_url]" +
   "&correlator=";

var postrollUrl = "http://pubads.g.doubleclick.net/gampad/ads?" +
   "sz=640x480&iu=/1014799/Postroll" +
   "&ciu_szs" +
   "&impl=s" +
   "&gdfp_req=1" +
   "&env=vp" +
   "&output=vast" +
   "&unviewed_position_start=1" +
   "&url=[referrer_url]" +
   "&description_url=[description_url]" +
   "&correlator=";

playerData.adManager = {
   "adsData": {
      "firstUid": {
         "schedule": [
            {
               "position": "pre-roll",
               "source": prerollUrl + Math.floor((Math.random() * 1000000000000) + 1)
            },
            {
               "position": "mid-roll",
               "startTime": "00:00:12",
               "endTime": "00:00:30",
               "source": midrollUrl + Math.floor((Math.random() * 1000000000000) + 1)
            },
            {
               "position": "post-roll",
               "source": postrollUrl + Math.floor((Math.random() * 1000000000000) + 1)
            }
         ]
      }
   }
};
**/


var UPlayerAdapter = function (options) {
   var defaults = {
      uid: "firstUid", // Player uid
      container: "video-player", // Video container
      videoId: "", // Video id
      jingleUrl: "", // Jingle url
      url: "", // Base video url + /video.mp4 or /video.flv is video url

      viewTrackingUrl: "", // View tracking url
      viewTrackingParams : {}, // Attributes v, domain

      swfPath: "",
      autoPlay: true, // Autoplay option
      loop: false, // Loop option
      nextVideoUrl: "", // Next video url
      nextVideoTitle: "", // Next video title
      is16x9: true, // Video is mp4 of flv
      isAdvertorial: false, // Video is advertorial or not
      isRestricted: false, // Video is restricted or not
      defaultType: "flash", // Default player type
      playerType: "html", // Player type is html or flash

      advertPro: {}, // Attributes: zoneId, keywords

      shareData: {}, // Attributes: url, name, via

      kitkat: {}, // Attributes: source, linkUrl, title, startTime, endTime, hasLink, linkTarget, textWatch, closeButton

      gemiusOptions: {}, // Attributes: identifier, hitcollector, playerId, totalTime, treeId, additionalPackage, customPackage

      companionZone: [], // Object attributes: id, height, width

      adManager: {},

      linkTarget: "_self",



      onVideoInit: function() {
         // implement if after video init
      }
   };

   this.settings = $.extend(true, defaults, !options ? {} : options);
};

UPlayerAdapter.prototype.bind = function (thisObj, fn) {
   return function () {
      fn.apply(thisObj, arguments);
   };
};

UPlayerAdapter.prototype.hasNextVideo = function () {
   return this.settings.nextVideoUrl != "";
};

UPlayerAdapter.prototype.hasJingle = function () {
   return this.settings.jingleUrl != "";
};

UPlayerAdapter.prototype.isRestricted = function () {
   return !$.cookie("adult") && this.settings.isRestricted;
};

UPlayerAdapter.prototype.hasKitkat = function () {
   return !$.isEmptyObject(this.settings.kitkat);
};


UPlayerAdapter.prototype.gemiusEnabled = function() {
   return !$.isEmptyObject(this.settings.gemiusOptions);
};

UPlayerAdapter.prototype.initGemiusStream = function () {
   //console.log("Gemius Stream Init");
   gemiusStream.newStream(
      this.settings.gemiusOptions.playerId,
      this.settings.videoId, // material identifier
      this.settings.gemiusOptions.totalTime,
      this.settings.gemiusOptions.customPackage,
      this.settings.gemiusOptions.additionalPackage,
      this.settings.gemiusOptions.identifier,
      this.settings.gemiusOptions.hitcollector,
      this.settings.gemiusOptions.treeId
   );

//   console.log("this.settings.gemiusOptions.playerId", this.settings.gemiusOptions.playerId);
//   console.log("thips.settings.videoId", this.settings.videoId);
//   console.log("this.settings.gemiusOptions.totalTime", this.settings.gemiusOptions.totalTime);
//   console.log("this.settings.gemiusOptions.customPackage", this.settings.gemiusOptions.customPackage);
//   console.log("this.settings.gemiusOptions.additionalPackage", this.settings.gemiusOptions.additionalPackage);
//   console.log("this.settings.gemiusOptions.identifier,", this.settings.gemiusOptions.identifier);
//   console.log("this.settings.gemiusOptions.hitcollector", this.settings.gemiusOptions.hitcollector);
//   console.log("this.settings.gemiusOptions.treeId", this.settings.gemiusOptions.treeId);
};

UPlayerAdapter.prototype.initPlayer = function (playerData) {
   var _this = this;

   _this.player = new UPlayer(playerData);

   _this.player.bind(UPlayer.EVENT.PLAYER_INITIALIZED, function () {
      $.get(_this.settings.viewTrackingUrl,
         _this.settings.viewTrackingParams
      );
   });

   _this.player.initialize();

   _this.player.bind(UPlayer.EVENT.FIRST_PLAY, function () {
      _this.settings.gemiusOptions.totalTime = parseInt(_this.player.video.duration);


      if (_this.gemiusEnabled()) {
         _this.initGemiusStream();

         gemiusStream.event(
            _this.settings.gemiusOptions.playerId,
            _this.settings.videoId, // material identifier
            0,
            "playing"
         );
         // console.log("Gemius First Play:");
         // console.log("_this.settings.gemiusOptions.playerId", _this.settings.gemiusOptions.playerId);
         // console.log("_this.settings.videoId", _this.settings.videoId);
      }


      // Callback onVideoInit
      _this.bind(_this, _this.settings.onVideoInit)();

      if (!_this.hasNextVideo()) {
         var wallData = {
            "templateCss": "videoWall-red"
         };

         var items = [];
         $.get("/arama/vplayer/ilgili-videolar?videoIdStr=" + _this.settings.videoId, function (r) {
            $(r.trim()).find('s').each(function (index, node) {
               var item = {};
               var videoId;
               var videoIdentifier;
               $.each(this.attributes, function (i, attrib) {
                  if (attrib.name == "t") {
                     item.title = attrib.value;
                  }
                  if (attrib.name == "o") {
                     item.info = attrib.value;
                  }
                  if (attrib.name == "no") {
                     videoId = attrib.value;
                  }
                  if (attrib.name == "id") {
                     videoIdentifier = attrib.value;
                  }
                  if (attrib.name = "ut") {
                     item.linkUrl = attrib.value;
                  }
               });

               item.thumbnail = "http://st1.uzmantv.com/videos/" + videoId + "/" + videoIdentifier + "/1_200.jpg";
               item.id = index;
               item.borderColor = "#ef8d65";
               items.push(item);
            });

            wallData["items"] = items;
            _this.player.setVideoWallData(wallData);

         });
      }
   });

   _this.player.bind(UPlayer.EVENT.PREROLL_INITIALIZED, function () {
//         // console.log("PREROLL_PLAY");
      if (_this.player.pageSkinned && typeof AdvUtil != "undefined") {
         AdvUtil.fitPageSkin();
      }
   });

   _this.player.bind(UPlayer.EVENT.FULLSCREEN_CHANGE, function () {
//         // console.log("FULLSCREEN_CHANGE")
   });

   _this.player.bind(UPlayer.EVENT.VIDEO_COMPLETE, function () {
//         // console.log("VIDEO_COMPLETE")
   });

   _this.player.bind(UPlayer.EVENT.VIDEO_PAUSE, function () {
      if (_this.gemiusEnabled() &&
         _this.player.video.currentTime > 0 &&
         _this.player.video.currentTime != _this.settings.gemiusOptions.totalTime) {

         gemiusStream.event(
            _this.settings.gemiusOptions.playerId,
            _this.settings.videoId, // material identifier
            _this.player.video.currentTime,
            "paused"
         );

      } // else video ended
   });

   _this.player.bind(UPlayer.EVENT.VIDEO_PLAY, function () {
      if (_this.gemiusEnabled() && _this.player.video.currentTime > 0) {

         gemiusStream.event(
            _this.settings.gemiusOptions.playerId,
            _this.settings.videoId, // material identifier
            _this.player.video.currentTime,
            "playing"
         );
      }
   });

   _this.player.bind(UPlayer.EVENT.VIDEO_END, function () {
      if (_this.gemiusEnabled()) {
         gemiusStream.event(
            _this.settings.gemiusOptions.playerId,
            _this.settings.videoId, // material identifier
            _this.player.video.currentTime,
            "complete"
         );
      }
   });

   _this.player.bind(UPlayer.EVENT.SURVEY_FINISHED, function (event, survey) {
   });

   _this.player.bind(UPlayer.EVENT.PLAY_BUTTON_PRESSED, function () {
   });


   _this.player.bind(UPlayer.EVENT.PAUSE_BUTTON_PRESSED, function () {
   });

   _this.player.bind(UPlayer.EVENT.AGE_VERIFICATION_FINISHED, function (e, data) {
      if (data.selectedOption.action == "proceed") {
         $.cookie("adult", true);
      }
   });
};


UPlayerAdapter.prototype.init = function () {
   var _this = this;

   var playerData = {
      "player": {
         "container": _this.settings.container,
         "defaultType": _this.settings.defaultType,
         "force": _this.settings.playerType, // Optional.
         "autoPlay": _this.settings.autoPlay,
         "loop": _this.settings.loop, // video bittiginde basa gelecek? Burayi kullanmayabiliriz.
         "swfPath": _this.settings.swfPath,
         "shareData": {
            "url": _this.settings.shareData.url,
            "name": _this.settings.shareData.name,
            "via": _this.settings.shareData.via
         },
         "companionZone": _this.settings.companionZone,
         "playlist": [
            {
               "uid": _this.settings.uid, // unique id
               "url": _this.settings.url,
               "sliderShowProgress": true,
               "sliderEnabled": false
            }
         ]
      }
   };

   if (_this.hasJingle()) {
      playerData.player.playlist[0]["jingle"] = {"url": _this.settings.jingleUrl};
   }

   if (_this.hasKitkat()) {
      playerData.player.playlist[0]["kitkat"] = [_this.settings.kitkat]
   }

   if (!_this.settings.isAdvertorial) {

      playerData.adManager = _this.settings.adManager;
   }

   if (_this.isRestricted()) {
      playerData.player.playlist[0]["ageVerification"] = {
         "linkUrl": "/",
         "linkTarget": _this.settings.linkTarget,
         "title": "18 yaşından büyük müsünüz?",
         "buttons": [
            {
               "title": "EVET",
               "action": "proceed"
            },
            {
               "title": "HAYIR",
               "action": "redirectUrl"
            }
         ],
         "templateCss": "nextVideo-red"
      }
   }

   if (_this.hasNextVideo()) {
      playerData.player.playlist[0]["nextVideo"] = {
         "skipDuration": "00:00:10",
         "linkUrl": _this.settings.nextVideoUrl,
         "title": _this.settings.nextVideoTitle,
         "textNextVideo": "Sıradaki Video",
         "textSkip": "%time% saniye sonra başlayacak.",
         "textStartNow": "Hemen Başlat",
         "templateCss": "nextVideo-red"
      };
   }

   this.initPlayer(playerData);
   window.player = _this.player;
};


