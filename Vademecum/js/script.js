//Script to Hamburger//
const hamburger = document.querySelector('.hamburger');
const navigation = document.querySelector('.navigation');
const container = document.querySelector('.container');
const content = document.querySelectorAll('.content-of-cms div');
const contentOfCms = document.querySelector('.content-of-cms');

const handleClick = () =>{
    hamburger.classList.toggle('hamburger--active');
    navigation.classList.toggle('navigation--active');
    container.classList.toggle('container--active');
    contentOfCms.classList.toggle('content-of-cms--active');
}

hamburger.addEventListener('click', handleClick);
//END Script to Hamburger//

//Script card selection//
const cards = document.querySelectorAll('.card');
const cardContainer = document.querySelector('.card-container');

const getCard = () =>{
    cards.forEach(card =>{
        card.addEventListener('click', () =>{
            cardContainer.classList.add('card--deactive');
            console.log(card + 'co to?: ' + cardContainer);
            content.forEach(cont =>{
                if(card.id === cont.id){
                    cont.classList.add('cms_content--active');
                }
                else
                console.log('NIe ma !!!')
            })

        })
    })
}
getCard();
//END Script card selection//

//Script card selection//
const navigationItem = document.querySelectorAll('.navigation__item');
const fontCheck = document.querySelectorAll('.check-circle');

const getCardNavList = () =>{
    navigationItem.forEach(nav =>{
        nav.addEventListener('click', () =>{
            cardContainer.classList.add('card--deactive');
            fontCheck.forEach(check =>{
                if(nav.id === check.id){
                    check.classList.toggle('check-circle--active');
                }  
            })
            content.forEach(cont =>{
                if(nav.id === cont.id){
                    cont.classList.toggle('cms_content--active');
                    console.log('checkkkk');
                }
                else
                console.log('NIe ma !!!')
            })

        })
    })
}
getCardNavList();

//END Script card selection//


//Search Script//
const input = document.querySelector('input');
const cmsContent = document.querySelectorAll('.cms_content div');
const searchButton = document.querySelector('.search-button');

const searchContent = (e) =>{
   const searchText = e.target.value.toLowerCase();
   if(searchText == ""){
        container.textContent = "";
   }
   else{
    let contentText = [...cmsContent];
    contentText = contentText.filter(div => div.textContent.toLocaleLowerCase().includes(searchText));
    console.log(contentText);
    container.textContent = "";
    contentText.forEach(div => container.appendChild(div));
    contentText.classList.add('cms_content--active');  
}
        

}

input.addEventListener('input', searchContent);


//End Search Script//

//Select of Content CMS//
const nameContent = document.querySelectorAll('.name_content');
const nameContentText = document.querySelectorAll('.name_content_text');
const codeContent = document.querySelectorAll('.code-content');

const selectOfContentClick = () =>{
   console.log('cliiiick');
    nameContent.forEach(name =>{
        name.addEventListener('click', () =>{
            nameContentText.forEach(text =>{
                console.log('clickkk ' + text.id + name.id);
                if(name.id === text.id){
                    text.classList.toggle('name_content_text--active');

                }
            })
        })
    })
}

selectOfContentClick();

//END Select of Content CMS//

//form validation//

const inputName = document.querySelector('.input-name');
const textareaContent = document.querySelector('.text-content');
const headerName = document.querySelectorAll('.header_name');
const formSubmit = document.querySelector('.button-form-submit input');
const adminCheck = document.querySelector('.admin-check');
const adminCheckCross = document.querySelector('.admin-red-cross');
const adminCheckContent = document.querySelector('.admin-check-content');
const adminCheckCrossContent = document.querySelector('.admin-red-cross-content');


formSubmit.disabled = true;


const formInputValidation = (e) =>{
    const formName = e.target.value.toLowerCase();
    formSubmit.disabled = false;
    console.log('false');
    adminCheckCross.classList.remove('admin-red-cross--active');
    adminCheck.classList.add('admin-check--active');
    adminCheckCrossContent.classList.add('admin-red-cross-content--active');
    headerName.forEach(head =>{
        const header = head.id.toLowerCase();
        if((formName == header) || (formName == "")){
            formSubmit.disabled = true;
            console.log('true');
            adminCheck.classList.remove('admin-check--active');
            adminCheckCross.classList.add('admin-red-cross--active');
        }  
            
    })

    textareaContent.addEventListener('input', (e) =>{
        const formContent = e.target.value;
        console.log(textareaContent.value);
        formSubmit.disabled = true;

        if(formContent !== ""){
            formSubmit.disabled = false;
            adminCheckContent.classList.add('admin-check-content--active')
            adminCheckCrossContent.classList.remove('admin-red-cross-content--active');
        }
        else if(formContent == ""){
            formSubmit.disabled = true;
            adminCheckContent.classList.remove('admin-check-content--active')
            adminCheckCrossContent.classList.add('admin-red-cross-content--active');
        }
            

        
    })
}

inputName.addEventListener('input', formInputValidation)

//END form validation//











