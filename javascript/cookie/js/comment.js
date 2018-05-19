/* 
 * @Author: Marte
 * @Date:   2018-02-08 11:33:03
 * @Last Modified by:   Marte
 * @Last Modified time: 2018-03-09 17:08:23
 */


/**
 * [任意范围随机整数]
 * @param  {[Number]} min [最小值]
 * @param  {[Number]} max [最大值]
 * @return {[Number]}     [返回值]
 */
function randomNumber(min, max) {
    var num = parseInt(Math.random() * (max - min + 1) + min);
    return num;
}

/**
 * [1-100随机整数]
 * @return {[Number]} [返回值]
 */
function randomInt() {
    var num = parseInt(Math.random() * 100 + 1);
    return num;
}

/**
 * [随机颜色]
 * @return {[String]} [返回值]
 */
function randomColor(){
    var r = parseInt(Math.random()*256);
    var g = parseInt(Math.random()*256);
    var b = parseInt(Math.random()*256);
    return 'rgb('+r+','+g+','+b+')';

}

/**
 * [16进制随机颜色]
 * @return {[String]} [返回值]
 */
function random16Color(){
    var str = '0123456789abcdef';
    var res = '#';
    for(var num = 0; num <6; num++){
        res += str.charAt(parseInt(Math.random()*str.length));
    }
    return res;
}

/**
 * [4为随机数字字母组合验证码]
 * @return {[String]} [返回值]
 */
function randomLetterNum(){
    var str = '0123456789abcdefghijklmnopqrstuvwxyz';
    var res = '';
    for(var num = 0; num<4; num++){
        res += str.charAt(parseInt(Math.random()*str.length));
    }
    return res;
}

/**
 * [DOM节点的相关方法]
 * @type {Object}
 */
// var Element = {
    /**
     * [传入一个类数组，过滤文本节点]
     * @param  {[array]} nodes [类数组]
     * @return {[array]}       [数组]
     */
    // get:function(nodes){
    //     var res = [];
    //     for(var i = 0; i < node.length; i++){
    //         if(node[i].nodeType==1){
    //             res.push(node[i]);
    //         }
    //     }
    //     return res;
    // }

    /**
     * [传入一个元素，获取他的子节点，过滤文本节点]
     * @param  {[type]} elem [元素]
     * @return {[array]}      [数组]
     */
//     children:function(elem){
//         var nodes = elem.childNodes;
//         var res = [];
//         nodes.forEach(function(item){
//             if(item.nodeType==1){
//                 res.push(item);
//             }
//         })
//         return res;
//     }
// }
// 


var Cookie = {
    get:function(key){
        var cookie = document.cookie;
        if(cookie.length ===0){
            return '';
        }
        var cookie = cookie.split('; ');
        for(var i = 0; i < cookie.length; i++){
            var arr = cookie[i].split('=');
            if(arr[0]===key){
                return arr[1];
            }
        }
        return '';
    },

    set:function(key,value,date,path){
        var str = key + '=' + value;
        if(date){
            str += ';expires' + date.toUTCString();
        }
        if(path){
            str += ';path' + path;
        }
        document.cookie = str;
    },

    remove:function(key,path){
        var d = new Date();
        d.setDate(d.getDate()-1);
        document.cookie = key + '=x;expires=' + d.toUTCString();
        // this.set(key,'x',d,path);
    }

}
