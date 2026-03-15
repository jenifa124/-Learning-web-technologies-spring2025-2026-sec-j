const quantities = document.querySelectorAll(".qty");

quantities.forEach(function(qtyInput){

    qtyInput.addEventListener("input", function(){

        let quantity = parseInt(this.value);
        let price = parseInt(this.dataset.price);

        if(quantity < 0 || isNaN(quantity)){
            quantity =0 ;
            this.value =0 ;
        }

        let total = price * quantity;

        let totalField = this.parentElement.querySelector(".total");
        totalField.value = total;

        if(total > 1000){
            alert("You are eligible for a gift coupon!");
        }

    });

});