$(document).on('scroll', function(){
const $doc = $(this);

const $startWindowHeight = $(window).height();
    //console.log($startWindowHeight);
const $docHeight = $doc.innerHeight();
const $containerSection2 = $('.container-box-section-second');
const $containerSection2Height = $containerSection2.innerHeight();
    
const $thumbnailSectionSix = $('.thumbnails-section-six');

    const $secFour = $('.section-four');
    
const $sectionOne = $('.section-one').offset().top;
const $sectionSecond = $('.section-second').offset().top;
    const $sectionThird = $('.section-third').offset().top;
    const $sectionFive = $('.section-five').offset().top;
    const $sectionSix = $('.section-six').offset().top;
    const $sectionSeven = $('.container-section-seven').offset().top;
    const $sectionEight = $('.section-eight').offset().top;
    const $sectionNine = $('.section-nine').offset().top;
    
    const $sectionOneHeight = $('.section-one').innerHeight();
const $sectionSecondHeight = $('.section-second').innerHeight();
    const $sectionThirdHeight = $('.section-third').innerHeight();
    //console.log($sectionThirdHeight);
    const $sectionFiveHeight = $('.section-five').innerHeight();
    const $sectionSixHeight = $('.section-six').innerHeight();
    const $sectionSevenHeight = $('.container-section-seven').innerHeight();
    const $sectionEightHeight = $('.section-eight').innerHeight();
    const $sectionNineHeight = $('.section-nine').innerHeight();
    
    


    
    const $docScroll = $doc.scrollTop();
    //console.log($docScroll);
    
   if($docScroll > $sectionSecond - $sectionSecondHeight/2){
       //console.log("Zostalem wyswietlony!!!");
       $containerSection2.addClass('active');
   }
    
    if($docScroll > $sectionSix - $sectionSixHeight/2){
        //console.log("SEKCJA 6 WYSWIETLONA!!!!!!!!");
        $thumbnailSectionSix.addClass('active');
    }
    
    if($docScroll > $sectionThird + $sectionFiveHeight/4){
        console.log("SEKCJA 333333333 !!!!!!");
        $secFour.addClass('active');
    }
    
    if($docScroll < 100){
        $containerSection2.removeClass('active');
        $thumbnailSectionSix.removeClass('active');
        $secFour.removeClass('active');
    }
    
    
    
})