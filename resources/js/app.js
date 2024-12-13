import './bootstrap';

import jQuery from "jquery";
window.$ = window.jQuery = jQuery;

import {Tools} from './common/tools.js';
window.Tools = Tools;

import {Burger} from "./class/Burger";
import {SmoothScroll} from "./class/SmoothScroll";
import Splide from "@splidejs/splide";
import {Accordion} from "./class/Accordion.js";

class Base {

    constructor() {
        let protoMain = Object.getPrototypeOf(this);
        let protoBase = Object.getPrototypeOf(protoMain);
        this.initStack = [];
        this.callInitByProto(protoBase);
        this.callInitByProto(protoMain);

        Tools.isWebp((support) => (support) ?
            document.documentElement.classList.add('webp') :
            document.documentElement.classList.add('no-webp'));

        new Burger();
        new SmoothScroll();
    }

    callInitByProto(proto) {
        let vars = Object.getOwnPropertyNames(proto);

        for(let method of vars) {
            if(method.match(/^init[\w]+/,method)) {
                this.initStack.push(method);

                this[method]();
            }
        }
    }

    initStickyHeader() {
        $(window).on('scroll', function(){

            let $header = $('header.header');
            let $headerBottom = $('.header .header__content');

            if ($(window).scrollTop() >= $header.outerHeight() - $headerBottom.outerHeight()) {
                $header.addClass('_sticky');
            }
            else {
                if(!$('body').hasClass('_locked')) {
                    $header.removeClass('_sticky');
                }
            }
        });
    }

    initSlider() {
        if(!$('.js-manufactured-slider').length)
            return;

        new Splide('.js-manufactured-slider', {
            pagination: false,
            gap: 18,
            mediaQuery: 'min',
            fixedWidth: 240,

            breakpoints: {
                1500: {
                    arrows: true,
                },
                1279.98: {
                    padding: { left: 0, right: 0 },
                },
                767.98: {
                    arrows: false,
                },
                320: {
                    padding: { left: 15, right: 15 },
                }
            }

        }).mount();
    }

    initLazyMap() {
        const $map = $('#map');
        const $script = $('#ymap_lazy');
        if(!$map.length) return;

        const calcScroll = function () {
            let hT = $map.offset().top,
                hH = $map.height(),
                wH = $(window).height(),
                wS = $(window).scrollTop();

            // console.log(wS, hT, hH, wH);
            if (wS > (hT+hH-wH)){
                $script.attr('src', $script.attr('data-src')).removeAttr('data-src');
            }
        }
        let handle = Tools.debounce(calcScroll, 100);

        $(window).on('scroll', handle);
    }

    initAccordion() {
        $('[data-acrd]').each((_, el) => {
            new Accordion({
                id: $(el).attr('data-acrd'),
                onlyOne: true
            })
        })
    }
}

window.Base = Base;

window.addEventListener('load', function () {
    new Base();
})
