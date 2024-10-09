let btnDeleteServices = document.getElementsByClassName('deleteServices');
for (let i = 0; i < btnDeleteServices.length; i++) {
    btnDeleteServices[i].addEventListener('click', function() {
        let _this = this;
        if(confirm('Delete item?')) {
            // let form = this.parentNode.querySelector('form');
            // form.submit();

        
            let id = this.getAttribute('data-id');
            let request = new XMLHttpRequest();

            let data = new FormData();
            data.append('id', id);
            data.append('action', 'delete');

            request.open('POST', siteUrl + '/admin/?page=services');
            request.send(data);
            request.onload = function(){
                if(request.status == 200){
                    if(request.responseText == "ok"){
                        _this.parentNode.parentNode.remove();
                    }
                }
            }
        }
    });    
} 

let btnDeleteShop = document.getElementsByClassName('deleteShop');
for (let i = 0; i < btnDeleteShop.length; i++) {
    btnDeleteShop[i].addEventListener('click', function() {
        let _this = this;
        if(confirm('Delete item?')) {
            // let form = this.parentNode.querySelector('form');
            // form.submit();

        
            let id = this.getAttribute('data-id');
            let request = new XMLHttpRequest();

            let data = new FormData();
            data.append('id', id);
            data.append('action', 'delete');

            request.open('POST', siteUrl + '/admin/?page=shop');
            request.send(data);
            request.onload = function(){
                if(request.status == 200){
                    if(request.responseText == "ok"){
                        _this.parentNode.parentNode.remove();
                    }
                }
            }
        }
    });    
} 