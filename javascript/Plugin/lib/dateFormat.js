if(!Date.prototype.format){
    Date.prototype.format = function(fmt){//YYYY-MM-DD
        var o = {
            "M+":this.getMonth()+1,
            "D+":this.getDate(),
            "h+":this.getHours(),
            "m+":this.getMinutes(),
            "s+":this.getSeconds(),
            "q+":Math.ceil((this.getMonth()+1)/3),
            "S+":this.getMilliseconds()
        };
        //替换年份
        if(/(Y+)/.test(fmt)){
            var res = String(this.getFullYear()).substr(4-RegExp.$1.length);
            fmt = fmt.replace(RegExp.$1,res);
        }

        for(var str in o){

            var reg = new RegExp('('+str+')');//  /(M+)/
            if(reg.test(fmt)){
                var res = RegExp.$1.length > 1 ? ('00' + o[str]).substr(String(o[str]).length): o[str];
                fmt = fmt.replace(RegExp.$1,res);
            }
        }

        return fmt;

    }
}