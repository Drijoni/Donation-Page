const tenDoll = document.getElementById('10d');
const tfDoll = document.getElementById('25d');
const ftDoll = document.getElementById('50d');
const huDoll = document.getElementById('100d');
const cusHoll = document.getElementById('customDon');

var moneyDonate = document.getElementById('amount').value;
console.log(moneyDonate);

var arr = [tenDoll, tfDoll, ftDoll, huDoll];



arr.forEach(item => {
  item.addEventListener('click', () => {
    changeValue(item);
  })

})


const changeValue = (props) => {
  document.getElementById("amount").value = props.getAttribute('data-value');
  console.log(moneyDonate)
  cusHoll.classList.remove('bg-white');
  cusHoll.classList.add('bg-transparent', 'text-yellow-400');
  cusHoll.removeAttribute('required');



  for (var i = 0; i <= arr.length; i++) {

    if (arr[i].id != props.id) {
      arr[i].classList.remove("bg-yellow-500", "text-white", "font-bold");
    }
    else {
      props.classList.add("bg-yellow-500", "text-white", "font-bold");
    }

  }
}

const changeValueCustom = () => {
  for (var i = 0; i <= arr.length; i++) {
    arr[i].classList.remove("bg-yellow-500", "text-white", "font-bold");
    cusHoll.classList.remove('bg-transparent', 'text-yellow-400');
    cusHoll.classList.add('bg-white');
  }

}

cusHoll.addEventListener('click', () => {
  changeValueCustom();
  cusHoll.setAttribute('required', '');
});

function changeDonation() {
  document.getElementById("amount").value = cusHoll.value;
  console.log(moneyDonate);
}




