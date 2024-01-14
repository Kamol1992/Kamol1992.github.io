const hamburger = document.querySelector('.hamburger');
const nav = document.querySelector('.navigation');
const navBar = document.querySelector('.navbar-container');
const brandName = document.querySelector('.brand-name');
const imageBrand = document.querySelector('.container-image-brand');
const mainNavName = document.querySelector('.nav-name');
const techHtml = document.querySelector('.html-container');
const techCss = document.querySelector('.css-container');
const techJs = document.querySelector('.js-container');
const techPhp = document.querySelector('.php-container');
const techSass = document.querySelector('.sass-container');
const techBootstrap = document.querySelector('.bootstrap-container');
const techMysql = document.querySelector('.mysql-container');
const techWordpress = document.querySelector('.wordpress-container');
const techSeo = document.querySelector('.seo-container');
const navName = document.querySelectorAll('.nav-name');

/* Variables of JavaScript*/
/*
const HeightHeader = document.querySelector('.container-section-header').scrollHeight;
const heighTextContent = document.querySelector('.section-text-content').scrollHeight;
const heightSectionPortfolio = document.querySelector('.section-portfolio').scrollHeight;
const heightTechnologySection = document.querySelector('.technology-section-content').scrollHeight;
const heightElements = HeightHeader + heighTextContent + heightSectionPortfolio -150;
*/
/*=====END VARIABLES=====*/





hamburger.addEventListener('click', function(){
    console.log('klik!');
    hamburger.classList.toggle('hamburger--active');
    nav.classList.toggle('navigation--active');
    brandName.classList.toggle('brand--active');
    imageBrand.classList.toggle('image-brand--active');

})

window.addEventListener('scroll', function(){
    /*console.log('skroll!');
    console.log(window.scrollY);*/

    if(window.scrollY >= 50)
    {
        navBar.classList.add('navbar--active');
        brandName.classList.add('brand--active');
        imageBrand.classList.add('image-brand--active');
        
        //pętla pobierająca listę menu//
        navName.forEach(navList =>{
            navList.classList.add('nav--active');
        })
            
        


        
        
    }


    else{
        navBar.classList.remove('navbar--active');
        brandName.classList.remove('brand--active');
        imageBrand.classList.remove('image-brand--active');
        
        //pętla pobierająca listę menu//
        navName.forEach(navList =>{
            navList.classList.remove('nav--active');
        })
    }
     
        
})


/*Function of appear in JAvaScript*/
/*
window.addEventListener('scroll', function(){

    if(window.scrollY > heightElements){
        console.log('ANIMACJA PORTFOLIO START!!!!!');
        techHtml.classList.add('html-container--active');
        techCss.classList.add('css-container--active');
        techJs.classList.add('js-container--active');
        techPhp.classList.add('php-container--active');
        techSass.classList.add('sass-container--active');
        techBootstrap.classList.add('bootsrtap-container--active');
        techMysql.classList.add('mysql-container--active');
        techWordpress.classList.add('wordpress-container--active');
        techSeo.classList.add('seo-container--active');
        
    }

    if(window.scrollY < 50){
        techHtml.classList.remove('html-container--active');
        techCss.classList.remove('css-container--active');
        techJs.classList.remove('js-container--active');
        techPhp.classList.remove('php-container--active');
        techSass.classList.remove('sass-container--active');
        techBootstrap.classList.remove('bootsrtap-container--active');
        techMysql.classList.remove('mysql-container--active');
        techWordpress.classList.remove('wordpress-container--active');
        techSeo.classList.remove('seo-container--active');
    }


})
*/
/*====END FUNCTION!====*/

/*HEADER*/
const header = $('.container-section-header');
const heightHeaderFromTop = header.offset().top;
const heightHeader = header.outerHeight(true);

/*CONTENT-TEXT*/
const textContent = $('.section-text-content');
const heighttextContentFromTop = textContent.offset().top;
const heighttextContent = textContent.outerHeight(true);

/*PORTFOLIO*/
const sectionPortfolio = $('.section-portfolio');
const heightSectionPortfolioFromTop = sectionPortfolio.offset().top;
const heightSectionPortfolio = sectionPortfolio.outerHeight(true);

/*TECHNOLOGY*/
const technologySection = $('.technology-section-content');
const heightTechnologySectionFromTop = technologySection.offset().top;
const heightTechnologySection = technologySection.outerHeight(true);


$(document).on('scroll', function extendingElements(){
    const windowHeight = $(window).height();
    let scrollValue = $(document).scrollTop();
    //console.log(scrollValue);


    if(scrollValue > heightSectionPortfolioFromTop + heightSectionPortfolio + heightSectionPortfolioFromTop/4 - windowHeight){
        console.log('ANIMACJA PORTFOLIO START!!!!!');
        techHtml.classList.add('html-container--active');
        techCss.classList.add('css-container--active');
        techJs.classList.add('js-container--active');
        techPhp.classList.add('php-container--active');
        techSass.classList.add('sass-container--active');
        techBootstrap.classList.add('bootsrtap-container--active');
        techMysql.classList.add('mysql-container--active');
        techWordpress.classList.add('wordpress-container--active');
        techSeo.classList.add('seo-container--active'); 
        
       
        
    }
    if(scrollValue <50){
        techHtml.classList.remove('html-container--active');
        techCss.classList.remove('css-container--active');
        techJs.classList.remove('js-container--active');
        techPhp.classList.remove('php-container--active');
        techSass.classList.remove('sass-container--active');
        techBootstrap.classList.remove('bootsrtap-container--active');
        techMysql.classList.remove('mysql-container--active');
        techWordpress.classList.remove('wordpress-container--active');
        techSeo.classList.remove('seo-container--active');
    }
});



