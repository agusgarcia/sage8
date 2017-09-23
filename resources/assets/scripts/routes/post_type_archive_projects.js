export default {
    init() {
        console.log("init projects");
        // JavaScript to be fired on the concerts page
        this.els = {
            document: $(document),
            $archive: $('.projects_archive'),
            $closeDetails: $('.project_information_button-close'),
            $arrowsDetails: $('.project_information_button-arrows span'),
            $arrowDetailsUp: $('.project_information_button-arrows span[data-direction="up"]'),
            $arrowDetailsDown: $('.project_information_button-arrows span[data-direction="down"]'),
            $blackBg: $('.background-black'),
        };

        this.els.$archive.on('click', '.project_name.has-details', this.showDetails.bind(this));
        this.els.$closeDetails.on('click', this.hideDetails.bind(this));
        this.els.$arrowsDetails.on('click', this.scrollDetails.bind(this));
        this.els.$blackBg.on('click', this.hideDetails.bind(this));
    },

    showDetails(e) {
        const $currentTarget = $(e.currentTarget);
        const $details = $currentTarget.parent().siblings('.project_information');
        $details.addClass('active');
        $details.fadeIn();
        this.els.$blackBg.fadeIn();
    },

    hideDetails() {
        const $details = $('.project_information.active');
        const $detailsContent = $('.project_information-clipped', $details);
        $details.removeClass('active');
        $details.fadeOut();
        this.els.$blackBg.fadeOut();
        $detailsContent.scrollTop(0);

        // Pause video
        const $iframe = $('iframe', $details);
        for (let i = 0; i < $iframe.length; i++) {
            $iframe[i].contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
        }
    },

    scrollDetails(e) {
        const $currentTarget = $(e.currentTarget);
        const $details = $('.project_information.active');
        const $detailsContent = $('.project_information-clipped', $details);
        const direction = $currentTarget.data('direction');
        const currentScrollTop = $detailsContent.scrollTop();
        if (direction == 'up') {
            $detailsContent.scrollTop(currentScrollTop - 30);
        } else if (direction == 'down') {
            $detailsContent.scrollTop(currentScrollTop + 30);
        }
    },

};
