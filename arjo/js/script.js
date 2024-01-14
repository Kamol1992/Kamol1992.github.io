
/* Function add a number of product to Pop Up*/
const blocks = document.querySelectorAll('.block-container');
const popUp = document.querySelector('.pop-up');
const contentPopUp = document.querySelector('.pop-up--number-product'); 
const productQuantity = document.querySelector('.pop-up--input-product-quantity');
const buttonApprove = document.querySelector('.button--acepted');
const form = document.querySelector('.pop-up--container--content');


const number = blocks.forEach(block =>{
    block.addEventListener('click', ()=>{
        document.getElementById("product-quantity").value = "1";
        popUp.classList.add('pop-up--active');
        contentPopUp.innerHTML = block.textContent;
        productQuantity.classList.add('pop-up--input-product-quantity--active');
        buttonApprove.classList.add('button--acepted--active');
        form.classList.add('pop-up--container--content--active');
        
    })
})
/*END Function add a number of product to Pop Up*/

/* Function getting data from Pop-Up*/

const buttonAdd = document.querySelector('.button--add-quantity');
const buttonSubtract = document.querySelector('.button--subtract-quantity');
const inputProductQuantity = document.querySelector('.pop-up--input-product-quantity input');
const tableNewProduct = document.querySelector('.table-body');
const buttonAcepted = document.querySelector('.button--acepted-of-the-order');
const popUpNumber = document.querySelector('.pop-up--number-product');
const numberQuantity = ['1'];
const html = [];

/* Getting value of input */
const addProduct = (e) =>{
    const quantity = e.target.value;
    numberQuantity.push(quantity);
}
inputProductQuantity.addEventListener('input', addProduct);

/* END Getting value of input */

/* Adding Number of product to order list*/

let lp = 0;

buttonAcepted.addEventListener('click', () => {
    buttonApprove.classList.remove('button--acepted--active');
    form.classList.remove('pop-up--container--content--active');
    const lastQuantity = numberQuantity.slice(-1);
    const td = document.createElement('tr');
    const numberProduct = popUpNumber.textContent;
    lp = lp + 1;

    /*HTML code creation*/
    const tekstHtml = td.innerHTML = `<td id="table--lp">${lp}</td><td id="table--number-product">${lastQuantity} x ${numberProduct}</td><td id="clock-${lp}" class="table-time">-- --</td><td id="table-status--${lp}">Zrealizuj</td><td><div class="table-button--acepted" id="button-${lp}" title="Zrealizuj"><i class="far fa-check-circle"></i></div></div>
    <div class="table-button--deleted" id="button-delete--${lp}"><i class="far fa-times-circle"></i></div></td></td>`;
    /*END HTML code creation*/


    /* Adding an item to an array and HTML document*/
    html.push(tekstHtml);
    tableNewProduct.appendChild(td);
    popUp.classList.remove('pop-up--active');

        let id = `clock-${lp}`;
        let buttonLp = `button-${lp}`;
        let buttonDel = `button-delete--${lp}`;
        let tableStatus = `table-status--${lp}`
        const timeOrder = document.getElementById(id);
        const buttonStart = document.getElementById(buttonLp);
        const buttonDelete = document.getElementById(buttonDel);
        const status = document.getElementById(tableStatus);
        /* END Adding an item to an array and HTML document*/

        /* lead time */
        
            buttonStart.addEventListener('click', () =>{
                buttonDelete.classList.toggle('table-button--deleted--active');
                buttonStart.classList.toggle('table-button--acepted--deactivate');
                status.textContent = 'w toku';

                    const time = () => {
                        let seconds = 0;
                        let minutes = 0;
                        let unit = 'sek';
                        timeOrder.textContent = 0 + " sek";
                        const timer = () => {
                            seconds++;
                            timeOrder.textContent = minutes + ":" + seconds + " " + unit;

                            if(seconds == 59){
                                seconds = 0;
                                minutes ++;
                                unit = 'min.';
                            }
                        }
                        return timer
                    }
                    const startTime = time(); 
                    setInterval(startTime, 1000);
            });
            /*END lead time */

            /* deletion of the order*/ 

            buttonDelete.addEventListener('click', () =>{
                tableNewProduct.removeChild(td);
            })
            /*END deletion of the order*/




            

})
/* END Adding Number of product to order list*/


/* END Function getting data from Pop-Up*/









        
        

    

    
    
