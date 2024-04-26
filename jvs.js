
validator = function(i){
    
    function validate (inputelemant,rule){
        var warningmessage = inputelemant.parentElement.querySelector('.form-message')
        var rules = selectorrules[rule.a];
        var errormessage;
        for (var i =0; i < rules.length; ++i ){
        errormessage = rules[i](inputelemant.value);
        if (errormessage) break;
        }
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
            if (Array.isArray(selectorrules[rule.a])){ //rule.a là các key của mảng hay còn gọi là số lượng pt của mảng
                selectorrules[rule.a].push(rule.test); // dẩy các function tương ướng với key
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
validator.minlength = function(a,min){
    return{
        a:a,
        test : function(value){
        return value.length >= min ? undefined : `vui lòng nhập nhiều hơn ${min} ký tự`;
        }
    };
}
validator.comfirmed =function(a,getcomfirm,message){
    return {
        a:a,
        test : function(value){
            return value === getcomfirm() ? undefined : message || `giá trị nhập vào không chính xác`
        }
    }
}    
validator({
    form:'#form-1',
    rules : [
        validator.required('#fullname','vui lòng nhập thông tin'),
        validator.required('#email','vui lòng nhập thông tin'),
        validator.required('#password','vui lòng nhập thông tin'),
        validator.required('#password_confirmation','vui lòng nhập thông tin'),
        validator.isemail('#email'),
        validator.minlength('#password',6),
        validator.comfirmed('#password_confirmation',function(){
            return document.querySelector('#form-1 #password').value;
        },'mật khẩu nhập lại không chính xác')
    ]
})