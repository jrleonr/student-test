
var RoomMenu = require('./components/RoomMenu');

//set class room menu
var roomMenu = new RoomMenu('Room__description');
//hide all elements and show first
roomMenu.hide().show(0);
//set event for parent
document.getElementById('menu').addEventListener('click', (e) => {
    if(e.target && e.target.matches('a.collection-item')) {
        roomMenu.hide().show( e.target.id.replace('room-', '') );
    }
});
