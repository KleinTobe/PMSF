<?php
include('../../config/config.php');
header('Content-type: text/javascript');

$last_modified_time = filemtime("map.common.php");
$etag = md5_file("map.common.php");
// always send headers
header("Last-Modified: " . gmdate("D, d M Y H:i:s", $last_modified_time) . " GMT");
header("Etag: $etag");
// exit if not modified
if (@strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) == $last_modified_time ||
    @trim($_SERVER['HTTP_IF_NONE_MATCH']) == $etag
) {
    header("HTTP/1.1 304 Not Modified");
    exit;
}
?>
'use strict';

/*eslint no-unused-vars: "off"*/

var noLabelsStyle = [{
featureType: 'poi',
elementType: 'labels',
stylers: [{
visibility: 'off'
}]
}, {
'featureType': 'all',
'elementType': 'labels.text.stroke',
'stylers': [{
'visibility': 'off'
}]
}, {
'featureType': 'all',
'elementType': 'labels.text.fill',
'stylers': [{
'visibility': 'off'
}]
}, {
'featureType': 'all',
'elementType': 'labels.icon',
'stylers': [{
'visibility': 'off'
}]
}];
var light2Style = [{
'elementType': 'geometry',
'stylers': [{
'hue': '#ff4400'
}, {
'saturation': -68
}, {
'lightness': -4
}, {
'gamma': 0.72
}]
}, {
'featureType': 'road',
'elementType': 'labels.icon'
}, {
'featureType': 'landscape.man_made',
'elementType': 'geometry',
'stylers': [{
'hue': '#0077ff'
}, {
'gamma': 3.1
}]
}, {
'featureType': 'water',
'stylers': [{
'hue': '#00ccff'
}, {
'gamma': 0.44
}, {
'saturation': -33
}]
}, {
'featureType': 'poi.park',
'stylers': [{
'hue': '#44ff00'
}, {
'saturation': -23
}]
}, {
'featureType': 'water',
'elementType': 'labels.text.fill',
'stylers': [{
'hue': '#007fff'
}, {
'gamma': 0.77
}, {
'saturation': 65
}, {
'lightness': 99
}]
}, {
'featureType': 'water',
'elementType': 'labels.text.stroke',
'stylers': [{
'gamma': 0.11
}, {
'weight': 5.6
}, {
'saturation': 99
}, {
'hue': '#0091ff'
}, {
'lightness': -86
}]
}, {
'featureType': 'transit.line',
'elementType': 'geometry',
'stylers': [{
'lightness': -48
}, {
'hue': '#ff5e00'
}, {
'gamma': 1.2
}, {
'saturation': -23
}]
}, {
'featureType': 'transit',
'elementType': 'labels.text.stroke',
'stylers': [{
'saturation': -64
}, {
'hue': '#ff9100'
}, {
'lightness': 16
}, {
'gamma': 0.47
}, {
'weight': 2.7
}]
}];
var darkStyle = [{
'featureType': 'all',
'elementType': 'labels.text.fill',
'stylers': [{
'saturation': 36
}, {
'color': '#b39964'
}, {
'lightness': 40
}]
}, {
'featureType': 'all',
'elementType': 'labels.text.stroke',
'stylers': [{
'visibility': 'on'
}, {
'color': '#000000'
}, {
'lightness': 16
}]
}, {
'featureType': 'all',
'elementType': 'labels.icon',
'stylers': [{
'visibility': 'off'
}]
}, {
'featureType': 'administrative',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#000000'
}, {
'lightness': 20
}]
}, {
'featureType': 'administrative',
'elementType': 'geometry.stroke',
'stylers': [{
'color': '#000000'
}, {
'lightness': 17
}, {
'weight': 1.2
}]
}, {
'featureType': 'landscape',
'elementType': 'geometry',
'stylers': [{
'color': '#000000'
}, {
'lightness': 20
}]
}, {
'featureType': 'poi',
'elementType': 'geometry',
'stylers': [{
'color': '#000000'
}, {
'lightness': 21
}]
}, {
'featureType': 'road.highway',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#000000'
}, {
'lightness': 17
}]
}, {
'featureType': 'road.highway',
'elementType': 'geometry.stroke',
'stylers': [{
'color': '#000000'
}, {
'lightness': 29
}, {
'weight': 0.2
}]
}, {
'featureType': 'road.arterial',
'elementType': 'geometry',
'stylers': [{
'color': '#000000'
}, {
'lightness': 18
}]
}, {
'featureType': 'road.local',
'elementType': 'geometry',
'stylers': [{
'color': '#181818'
}, {
'lightness': 16
}]
}, {
'featureType': 'transit',
'elementType': 'geometry',
'stylers': [{
'color': '#000000'
}, {
'lightness': 19
}]
}, {
'featureType': 'water',
'elementType': 'geometry',
'stylers': [{
'lightness': 17
}, {
'color': '#525252'
}]
}];
var pGoStyle = [{
'featureType': 'landscape.man_made',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#a1f199'
}]
}, {
'featureType': 'landscape.natural.landcover',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#37bda2'
}]
}, {
'featureType': 'landscape.natural.terrain',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#37bda2'
}]
}, {
'featureType': 'poi.attraction',
'elementType': 'geometry.fill',
'stylers': [{
'visibility': 'on'
}]
}, {
'featureType': 'poi.business',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#e4dfd9'
}]
}, {
'featureType': 'poi.business',
'elementType': 'labels.icon',
'stylers': [{
'visibility': 'off'
}]
}, {
'featureType': 'poi.park',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#37bda2'
}]
}, {
'featureType': 'road',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#84b09e'
}]
}, {
'featureType': 'road',
'elementType': 'geometry.stroke',
'stylers': [{
'color': '#fafeb8'
}, {
'weight': '1.25'
}]
}, {
'featureType': 'road.highway',
'elementType': 'labels.icon',
'stylers': [{
'visibility': 'off'
}]
}, {
'featureType': 'water',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#5ddad6'
}]
}];
var light2StyleNoLabels = [{
'elementType': 'geometry',
'stylers': [{
'hue': '#ff4400'
}, {
'saturation': -68
}, {
'lightness': -4
}, {
'gamma': 0.72
}]
}, {
'featureType': 'road',
'elementType': 'labels.icon'
}, {
'featureType': 'landscape.man_made',
'elementType': 'geometry',
'stylers': [{
'hue': '#0077ff'
}, {
'gamma': 3.1
}]
}, {
'featureType': 'water',
'stylers': [{
'hue': '#00ccff'
}, {
'gamma': 0.44
}, {
'saturation': -33
}]
}, {
'featureType': 'poi.park',
'stylers': [{
'hue': '#44ff00'
}, {
'saturation': -23
}]
}, {
'featureType': 'water',
'elementType': 'labels.text.fill',
'stylers': [{
'hue': '#007fff'
}, {
'gamma': 0.77
}, {
'saturation': 65
}, {
'lightness': 99
}]
}, {
'featureType': 'water',
'elementType': 'labels.text.stroke',
'stylers': [{
'gamma': 0.11
}, {
'weight': 5.6
}, {
'saturation': 99
}, {
'hue': '#0091ff'
}, {
'lightness': -86
}]
}, {
'featureType': 'transit.line',
'elementType': 'geometry',
'stylers': [{
'lightness': -48
}, {
'hue': '#ff5e00'
}, {
'gamma': 1.2
}, {
'saturation': -23
}]
}, {
'featureType': 'transit',
'elementType': 'labels.text.stroke',
'stylers': [{
'saturation': -64
}, {
'hue': '#ff9100'
}, {
'lightness': 16
}, {
'gamma': 0.47
}, {
'weight': 2.7
}]
}, {
'featureType': 'all',
'elementType': 'labels.text.stroke',
'stylers': [{
'visibility': 'off'
}]
}, {
'featureType': 'all',
'elementType': 'labels.text.fill',
'stylers': [{
'visibility': 'off'
}]
}, {
'featureType': 'all',
'elementType': 'labels.icon',
'stylers': [{
'visibility': 'off'
}]
}];
var darkStyleNoLabels = [{
'featureType': 'all',
'elementType': 'labels.text.fill',
'stylers': [{
'visibility': 'off'
}]
}, {
'featureType': 'all',
'elementType': 'labels.text.stroke',
'stylers': [{
'visibility': 'off'
}]
}, {
'featureType': 'all',
'elementType': 'labels.icon',
'stylers': [{
'visibility': 'off'
}]
}, {
'featureType': 'administrative',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#000000'
}, {
'lightness': 20
}]
}, {
'featureType': 'administrative',
'elementType': 'geometry.stroke',
'stylers': [{
'color': '#000000'
}, {
'lightness': 17
}, {
'weight': 1.2
}]
}, {
'featureType': 'landscape',
'elementType': 'geometry',
'stylers': [{
'color': '#000000'
}, {
'lightness': 20
}]
}, {
'featureType': 'poi',
'elementType': 'geometry',
'stylers': [{
'color': '#000000'
}, {
'lightness': 21
}]
}, {
'featureType': 'road.highway',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#000000'
}, {
'lightness': 17
}]
}, {
'featureType': 'road.highway',
'elementType': 'geometry.stroke',
'stylers': [{
'color': '#000000'
}, {
'lightness': 29
}, {
'weight': 0.2
}]
}, {
'featureType': 'road.arterial',
'elementType': 'geometry',
'stylers': [{
'color': '#000000'
}, {
'lightness': 18
}]
}, {
'featureType': 'road.local',
'elementType': 'geometry',
'stylers': [{
'color': '#181818'
}, {
'lightness': 16
}]
}, {
'featureType': 'transit',
'elementType': 'geometry',
'stylers': [{
'color': '#000000'
}, {
'lightness': 19
}]
}, {
'featureType': 'water',
'elementType': 'geometry',
'stylers': [{
'lightness': 17
}, {
'color': '#525252'
}]
}];
var pGoStyleNoLabels = [{
'featureType': 'landscape.man_made',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#a1f199'
}]
}, {
'featureType': 'landscape.natural.landcover',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#37bda2'
}]
}, {
'featureType': 'landscape.natural.terrain',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#37bda2'
}]
}, {
'featureType': 'poi.attraction',
'elementType': 'geometry.fill',
'stylers': [{
'visibility': 'on'
}]
}, {
'featureType': 'poi.business',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#e4dfd9'
}]
}, {
'featureType': 'poi.business',
'elementType': 'labels.icon',
'stylers': [{
'visibility': 'off'
}]
}, {
'featureType': 'poi.park',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#37bda2'
}]
}, {
'featureType': 'road',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#84b09e'
}]
}, {
'featureType': 'road',
'elementType': 'geometry.stroke',
'stylers': [{
'color': '#fafeb8'
}, {
'weight': '1.25'
}]
}, {
'featureType': 'road.highway',
'elementType': 'labels.icon',
'stylers': [{
'visibility': 'off'
}]
}, {
'featureType': 'water',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#5ddad6'
}]
}, {
'featureType': 'all',
'elementType': 'labels.text.stroke',
'stylers': [{
'visibility': 'off'
}]
}, {
'featureType': 'all',
'elementType': 'labels.text.fill',
'stylers': [{
'visibility': 'off'
}]
}, {
'featureType': 'all',
'elementType': 'labels.icon',
'stylers': [{
'visibility': 'off'
}]
}];
var pGoStyleDay = [{
'featureType': 'landscape.man_made',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#99f291'
}]
}, {
'featureType': 'landscape.natural.landcover',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#00af8f'
}]
}, {
'featureType': 'landscape.natural.terrain',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#00af8f'
}]
}, {
'featureType': 'landscape.natural',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#00af8f'
}]
}, {
'featureType': 'poi.attraction',
'elementType': 'geometry.fill',
'stylers': [{
'visibility': 'on'
}]
}, {
'featureType': 'poi.business',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#e4dfd9'
}]
}, {
'featureType': 'poi.business',
'elementType': 'labels.icon',
'stylers': [{
'visibility': 'off'
}]
}, {
'featureType': 'poi.park',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#00af8f'
}]
}, {
'featureType': 'road',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#7eb2a4'
}]
}, {
'featureType': 'road',
'elementType': 'geometry.stroke',
'stylers': [{
'color': '#ffff92'
}, {
'weight': '2'
}]
}, {
'featureType': 'road.highway',
'elementType': 'labels.icon',
'stylers': [{
'visibility': 'off'
}]
}, {
'featureType': 'water',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#1688da'
}]
}, {
'featureType': 'poi.attraction',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#e4fdee'
}]
}, {
'featureType': 'poi.sports_complex',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#d4ffbc'
}]
}];
var pGoStyleNight = [{
'featureType': 'landscape.man_made',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#12a085'
}]
}, {
'featureType': 'landscape.natural.landcover',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#02706a'
}]
}, {
'featureType': 'landscape.natural.terrain',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#02706a'
}]
}, {
'featureType': 'landscape.natural',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#02706a'
}]
}, {
'featureType': 'poi',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#6da298'
}]
}, {
'featureType': 'poi.medical',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#6da298'
}]
}, {
'featureType': 'poi.attraction',
'elementType': 'geometry.fill',
'stylers': [{
'visibility': 'on'
}]
}, {
'featureType': 'poi.business',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#1fba9c'
}]
}, {
'featureType': 'poi.business',
'elementType': 'labels.icon',
'stylers': [{
'visibility': 'off'
}]
}, {
'featureType': 'poi.park',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#02706a'
}]
}, {
'featureType': 'transit',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#428290'
}]
}, {
'featureType': 'road',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#316589'
}]
}, {
'featureType': 'road',
'elementType': 'geometry.stroke',
'stylers': [{
'color': '#7f8b60'
}, {
'weight': '2'
}]
}, {
'featureType': 'road.highway',
'elementType': 'labels.icon',
'stylers': [{
'visibility': 'off'
}]
}, {
'featureType': 'water',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#1e4fbc'
}]
}, {
'featureType': 'poi.attraction',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#1fba9c'
}]
}, {
'featureType': 'poi.sports_complex',
'elementType': 'geometry.fill',
'stylers': [{
'color': '#1fba9c'
}]
}];

var pokemonSprites = {
normal: {
columns: 28,
iconWidth: 80,
iconHeight: 80,
spriteWidth: 2240,
spriteHeight: 1440,
filename: 'static/icons-large-sprite.png',
name: 'Normal'
},
monoclelow: {
columns: 28,
iconWidth: 80,
iconHeight: 80,
spriteWidth: 2240,
spriteHeight: 1440,
filename: 'static/icons-im-1.png',
name: 'Monocle LQ'
},
monoclehq: {
columns: 28,
iconWidth: 80,
iconHeight: 80,
spriteWidth: 2240,
spriteHeight: 1440,
filename: 'static/icons-im-1-bigger.png',
name: 'Monocle HQ'
},
shiny: {
columns: 25,
iconWidth: 64,
iconHeight: 64,
spriteWidth: 1600,
spriteHeight: 1024,
filename: 'static/shiny.png',
name: 'Shiny'
},
shinyback: {
columns: 28,
iconWidth: 80,
iconHeight: 80,
spriteWidth: 2240,
spriteHeight: 1440,
filename: 'static/shiny-back.png',
name: 'Shiny Back'
}

//
// LocalStorage helpers
//

};var StoreTypes = {
Boolean: {
parse: function parse(str) {
switch (str.toLowerCase()) {
case '1':
case 'true':
case 'yes':
return true;
default:
return false;
}
},
stringify: function stringify(b) {
return b ? 'true' : 'false';
}
},
JSON: {
parse: function parse(str) {
return JSON.parse(str);
},
stringify: function stringify(json) {
return JSON.stringify(json);
}
},
String: {
parse: function parse(str) {
return str;
},
stringify: function stringify(str) {
return str;
}
},
Number: {
parse: function parse(str) {
return parseInt(str, 10);
},
stringify: function stringify(number) {
return number.toString();
}
}

// set the default parameters for you map here
};var StoreOptions = {
'map_style': {
default: '<?php echo $mapStyle ?>', // roadmap, satellite, hybrid, nolabels_style, dark_style, style_light2, style_pgo, dark_style_nl, style_pgo_day, style_pgo_night, style_pgo_dynamic
type: StoreTypes.String
},
'remember_select_exclude': {
default: <?php echo $noHidePokemon ? '[]' : $hidePokemon ?>,
type: StoreTypes.JSON
},
'remember_select_notify': {
default: <?php echo $noNotifyPokemon ? '[]' : $notifyPokemon ?>,
type: StoreTypes.JSON
},
'remember_select_rarity_notify': {
default: <?php echo $noNotifyRarity ? '[]' : $notifyRarity ?>, // Common, Uncommon, Rare, Very Rare, Ultra Rare
type: StoreTypes.JSON
},
'remember_text_perfection_notify': {
default: <?php echo $noNotifyIv ? '""' : $notifyIv ?>,
type: StoreTypes.Number
},
'remember_raid_notify': {
default: <?php echo $noNotifyRaid ? 0 : $notifyRaid ?>,
type: StoreTypes.Number
},
'showRaids': {
default: <?php echo $noRaids ? 'false' : $enableRaids ?>,
type: StoreTypes.Boolean
},
'activeRaids': {
default: <?php echo $activeRaids ?>,
type: StoreTypes.Boolean
},
'minRaidLevel': {
default: <?php echo $minRaidLevel ?>,
type: StoreTypes.Number
},
'maxRaidLevel': {
default: <?php echo $maxRaidLevel ?>,
type: StoreTypes.Number
},
'showGyms': {
default: <?php echo $noGyms ? 'false' : $enableGyms ?>,
type: StoreTypes.Boolean
},
'useGymSidebar': {
default: <?php echo $noGymSidebar ? 'false' : $gymSidebar ?>,
type: StoreTypes.Boolean
},
'showOpenGymsOnly': {
default: false,
type: StoreTypes.Boolean
},
'showTeamGymsOnly': {
default: 0,
type: StoreTypes.Number
},
'showLastUpdatedGymsOnly': {
default: 0,
type: StoreTypes.Number
},
'minGymLevel': {
default: 0,
type: StoreTypes.Number
},
'maxGymLevel': {
default: 6,
type: StoreTypes.Number
},
'showPokemon': {
default: <?php echo $noPokemon ? 'false' : $enablePokemon ?>,
type: StoreTypes.Boolean
},
'showPokestops': {
default: <?php echo $noPokestops ? 'false' : $enablePokestops ?>,
type: StoreTypes.Boolean
},
'showLuredPokestopsOnly': {
default: <?php echo $map != "monocle" ? $enableLured : 0 ?>,
type: StoreTypes.Number
},
'showScanned': {
default: <?php echo $map != "monocle" && !$noScannedLocations ? $enableScannedLocations : 'false' ?>,
type: StoreTypes.Boolean
},
'showSpawnpoints': {
default: <?php echo $noSpawnPoints ? 'false' : $enableSpawnPoints ?>,
type: StoreTypes.Boolean
},
'showRanges': {
default: <?php echo $noRanges ? 'false' : $enableRanges ?>,
type: StoreTypes.Boolean
},
'playSound': {
default: <?php echo $noNotifySound ? 'false' : $notifySound ?>,
type: StoreTypes.Boolean
},
'playCries': {
default: <?php echo $noCriesSound ? 'false' : $criesSound ?>,
type: StoreTypes.Boolean
},
'criesType': {
default: "<?php echo $criesType; ?>",
type: StoreTypes.String
},
'geoLocate': {
default: false,
type: StoreTypes.Boolean
},
'lockMarker': {
default: isTouchDevice(), // default to true if touch device
type: StoreTypes.Boolean
},
'startAtUserLocation': {
default: <?php echo $noStartMe ? 'false' : $enableStartMe ?>,
type: StoreTypes.Boolean
},
'startAtLastLocation': {
default: <?php echo (!$noStartLast && $enableStartMe === 'false') ? $enableStartLast : 'false' ?>,
type: StoreTypes.Boolean
},
'startAtLastLocationPosition': {
default: [],
type: StoreTypes.JSON
},
'followMyLocation': {
default: <?php echo $noFollowMe ? 'false' : $enableFollowMe ?>,
type: StoreTypes.Boolean
},
'followMyLocationPosition': {
default: [],
type: StoreTypes.JSON
},
'spawnArea': {
default: <?php echo $noSpawnArea ? 'false' : $enableSpawnArea ?>,
type: StoreTypes.Boolean
},
'scanHere': {
default: false,
type: StoreTypes.Boolean
},
'scanHereAlerted': {
default: false,
type: StoreTypes.Boolean
},
'pokemonIcons': {
default: '<?php echo $icons ?>',
type: StoreTypes.String
},
'iconSizeModifier': {
default: <?php echo $iconSize ?>,
type: StoreTypes.Number
},
'searchMarkerStyle': {
default: 'google',
type: StoreTypes.String
},
'locationMarkerStyle': {
default: '<?php echo $locationStyle ?>',
type: StoreTypes.String
},
'gymMarkerStyle': {
default: '<?php echo $gymStyle ?>',
type: StoreTypes.String
},
'zoomLevel': {
default: 16,
type: StoreTypes.Number
}
};

var Store = {
getOption: function getOption(key) {
var option = StoreOptions[key];
if (!option) {
throw new Error('Store key was not defined ' + key);
}
return option;
},
get: function get(key) {
var option = this.getOption(key);
var optionType = option.type;
var rawValue = localStorage[key];
if (rawValue === null || rawValue === undefined) {
return option.default;
}
var value = optionType.parse(rawValue);
return value;
},
set: function set(key, value) {
var option = this.getOption(key);
var optionType = option.type || StoreTypes.String;
var rawValue = optionType.stringify(value);
localStorage[key] = rawValue;
},
reset: function reset(key) {
localStorage.removeItem(key);
}
};

var mapData = {
pokemons: {},
gyms: {},
pokestops: {},
lurePokemons: {},
scanned: {},
spawnpoints: {}
};

function getGoogleSprite(index, sprite, displayHeight) {
displayHeight = Math.max(displayHeight, 3);
var scale = displayHeight / sprite.iconHeight;
// Crop icon just a tiny bit to avoid bleedover from neighbor
var scaledIconSize = new google.maps.Size(scale * sprite.iconWidth - 1, scale * sprite.iconHeight - 1);
var scaledIconOffset = new google.maps.Point(index % sprite.columns * sprite.iconWidth * scale + 0.5, Math.floor(index / sprite.columns) * sprite.iconHeight * scale + 0.5);
var scaledSpriteSize = new google.maps.Size(scale * sprite.spriteWidth, scale * sprite.spriteHeight);
var scaledIconCenterOffset = new google.maps.Point(scale * sprite.iconWidth / 2, scale * sprite.iconHeight / 2);

return {
url: sprite.filename,
size: scaledIconSize,
scaledSize: scaledSpriteSize,
origin: scaledIconOffset,
anchor: scaledIconCenterOffset
};
}

function setupPokemonMarker(item, map, isBounceDisabled) {
// Scale icon size up with the map exponentially
var iconSize = 2 + (map.getZoom() - 3) * (map.getZoom() - 3) * 0.2 + Store.get('iconSizeModifier');
var pokemonIndex = item['pokemon_id'] - 1;
var sprite = pokemonSprites[Store.get('pokemonIcons')] || pokemonSprites['monoclehq'];
var icon = getGoogleSprite(pokemonIndex, sprite, iconSize);

var animationDisabled = false;
if (isBounceDisabled === true) {
animationDisabled = true;
}

var marker = new google.maps.Marker({
position: {
lat: item['latitude'],
lng: item['longitude']
},
zIndex: 9999,
map: map,
icon: icon,
animationDisabled: animationDisabled
});

return marker;
}

function isTouchDevice() {
// Should cover most browsers
return 'ontouchstart' in window || navigator.maxTouchPoints;
}

function isMobileDevice() {
//  Basic mobile OS (not browser) detection
return (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)
);
}