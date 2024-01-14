//form validation add CMS//
const inputAddCms = document.querySelector('.input-new-cms');
const checkAddCms = document.querySelector('.add-cms-check-content');
const crossAddCms = document.querySelector('.add-cms-red-cross-content');
const buttonAddCms = document.querySelector('.button-form-add-cms input');
const nameCms = document.querySelectorAll('.cms_content-admin');

buttonAddCms.disabled = true;

const addCmsFunction = (e) =>{
    const input= e.target.value.toLowerCase();
    console.log(input);
    buttonAddCms.disabled = false;
    checkAddCms.classList.add('add-cms-check-content--active');
    crossAddCms.classList.remove('add-cms-red-cross-content--active');

    nameCms.forEach(cms =>{
        const deleteCms = cms.id.toLowerCase();

        if((`cms__${input}` == deleteCms) || (input == "")){
            buttonAddCms.disabled = true;
            checkAddCms.classList.remove('add-cms-check-content--active');
            crossAddCms.classList.add('add-cms-red-cross-content--active');
        }
    })

    

}


inputAddCms.addEventListener('input', addCmsFunction)



//ENDform validation add CMS//