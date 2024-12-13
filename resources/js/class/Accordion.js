export class Accordion {
    constructor(params = {}) {
        this.id = params.id;
        this.$parent = $(`[data-acrd="${this.id}"]`);
        this.blockSelector = params.blockSelector ?? '[data-acrd-block]';
        this.bodySelector = params.blockSelector ?? '[data-acrd-body]';
        this.$button = this.$parent.find('[data-acrd-btn]');
        this.onlyOne = params.onlyOne ?? false

        this.#init();
    }

    #init() {
        this.$button.on('click.acrd', this.toggleBlock.bind(this));
    }

    toggleBlock(e) {
        const $currentButton = $(e.currentTarget)
        const $currentBlock = $currentButton.parent(this.blockSelector);
        const $currentBody = $currentButton.next(this.bodySelector);


        if(!$currentBlock.hasClass('_open')) {
            $currentBlock.addClass('_open')
            $currentBody.slideDown(300);

            if(this.onlyOne) {
                this.closeAllBlocks($currentBlock, $currentBody)
            }
        }
        else {
            $currentBlock.removeClass('_open')
            $currentBody.slideUp(300);
        }
    }

    closeAllBlocks($currentBlock, $currentBody) {
        this.$parent.find(this.blockSelector).not($currentBlock).each((_, block) => {
            $(block).removeClass('_open')
        })

        this.$parent.find(this.bodySelector).not($currentBody).each((_, body) => {
            $(body).slideUp(300)
        })
    }
}