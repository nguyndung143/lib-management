
validator = function(i){
    
    function validate (inputelemant,rule){
        var errormessage = rule.test(inputelemant.value)
        var warningmessage = inputelemant.parentElement.querySelector('.form-message')
        if(errormessage){
            warningmessage.innerText = errormessage;
            inputelemant.parentElement.classList.add('invalid');
        }else{
            warningmessage.innerText = '';
            inputelemant.parentElement.classList.remove('invalid');
        }
    }
    var formelements = document.querySelector(i.form);
    var selectorrules = {};
    if (formelements){
        i.rules.forEach(function(rule){
            // lưu các function rule
            if (Array.isArray(selectorrules[rule.a])){
                selectorrules[rule.a].push(rule.test);
            }else{
                selectorrules[rule.a] = [rule.test];
            }
            var inputelemant = formelements.querySelector(rule.a)
                if(inputelemant){
                    inputelemant.onblur = function(){
                        validate(inputelemant,rule);
                    }
                }  
                inputelemant.oninput = function(){
                    var warningmessage = inputelemant.parentElement.querySelector('.form-message')
                    warningmessage.innerText = '';
                    inputelemant.parentElement.classList.remove('invalid');
                }
        })
        console.log(selectorrules);
    }
}
// kiem tra 
validator.required = function(a,message){

return{
    a :a,
    test:function(value) {
        return value.trim() ? undefined : message || "vui lòng nhập đúng thông tin"
    }
};
}
// kiem tra email
validator.isemail = function(a){

    return{
        a :a,
        test:function(value) {
            var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
             return regex.test(value) ? undefined : "vui lòng nhập đúng dạng email"
        }
    };
}
// kiem tri do dai
validator.minlenght = function(a,min){
    return{
        a:a,
        test : function(value){
         value.length >= min ? undefined : 'nhập nhiều hơn {$min} ký tự'
        }
    };
}
validator({
    form:'#form-1',
    rules : [
        validator.required('#fullname','vui lòng nhập thông tin'),
        validator.required('#email','vui lòng nhập thông tin'),
        validator.required('$password','vui lòng nhập thông tin'),
        // validator.required('#password'),
        validator.isemail('#email'),
        // validator.minlenght('#password',6),
        // validator.minlenght('#password',6),
    ]
})