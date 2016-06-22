(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

/**
 * This class for manage the room menu
 */
module.exports = function () {

    /**
     * Create a new class instance.
     * @param elementClass
     */

    function RoomMenu(elementClass) {
        _classCallCheck(this, RoomMenu);

        this.descriptions = document.getElementsByClassName(elementClass);
    }

    _createClass(RoomMenu, [{
        key: 'hide',
        value: function hide() {
            this.changeStyle({ property: 'display', value: 'none' });

            return this;
        }
    }, {
        key: 'show',
        value: function show() {
            var element = arguments.length <= 0 || arguments[0] === undefined ? '' : arguments[0];


            if (element) {
                this.descriptions[element].style.display = 'block';

                return this;
            }

            this.changeStyle({ property: 'display', value: 'block' });

            return this;
        }
    }, {
        key: 'changeStyle',
        value: function changeStyle(style) {
            Array.prototype.forEach.call(this.descriptions, function (description) {
                return description['style'][style.property] = style.value;
            });
        }
    }]);

    return RoomMenu;
}();

},{}],2:[function(require,module,exports){
'use strict';

var RoomMenu = require('./components/RoomMenu');

//set class room menu
var roomMenu = new RoomMenu('Room__description');
//hide all elements and show first
roomMenu.hide().show(0);
//set event for parent
document.getElementById('menu').addEventListener('click', function (e) {
    if (e.target && e.target.matches('a.collection-item')) {
        roomMenu.hide().show(e.target.id.replace('room-', ''));
    }
});

},{"./components/RoomMenu":1}]},{},[2]);

//# sourceMappingURL=main.js.map
