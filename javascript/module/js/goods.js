require.config({
    paths:{
        jquery:'../lib/jquery-3.2.1'
    }
})

require(['jquery','common','car'],function($,a,b){
    // let num = randomNumber(10,100);
    // console.log(num);

    let $ul = $('ul');
    console.log($,a,b);
    b('duoduo');
})