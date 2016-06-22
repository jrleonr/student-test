/**
 * This class for manage the room menu
 */
module.exports = class RoomMenu {
    
    /**
     * Create a new class instance.
     * @param elementClass
     */
    constructor(elementClass) {
        this.descriptions = document.getElementsByClassName(elementClass);
    }

    hide() {
        this.changeStyle({property: 'display', value: 'none'});

        return this;
    }

    show(element = '') {

        if(element) {
            this.descriptions[element].style.display = 'block';

            return this;
        }

        this.changeStyle({property: 'display', value: 'block'});


        return this;
    }

    changeStyle(style) {
        Array.prototype.forEach.call(this.descriptions, 
            (description) => description['style'][style.property] = style.value
        );
    }
}
