class upload{
    constructor(){
        this.data=[];
        this.list=[];
        this.size=1024*1024*10;
        this.type="image/png;image/jpeg;image/gif";
        this.filename='file';
        this.selectBtnStyle='width:70px;height:30px;background:pink;font-size:10px;color:#fff;border-radius:5px;margin-left:150px';
        this.selectBtnCon='选择文件';
        this.pStyle='width:300px;height:auto;border:1px solid #ccc;margin-left:150px;overflow:hidden';
        this.upBtnStyle='width:70px;height:30px;background:pink;font-size:10px;color:#fff;border-radius:5px;margin-left:150px';
        this.upBtnCon='上传文件';
        this.listStyle='width:130px;height:130px;float:left;';
        this.progressStyle='width:100%;height:8px;background:#ccc;position:absolute;bottom:0;left:0;';
        this.barStyle='width:0;height:100%;background:red;';
        this.errorStyle='width:100%;height:20px;background:rgba(0,0,0,0.7);position:absolute;top:0;bottom:0;left:0;right:0;margin:auto;color:#fff;text-align:center;line-height:20px';
        this.errorCon='上传失败';
        this.delStyle='width:20px;height:20px;border:1px solid #333;position:absolute;top:3px;right:3px;text-align:center;line-height:20px;';
        this.delCon='X';
    }
    createView(params){
        //创建选择按钮
        this.createSelect(params.parent,params.selectBtn,()=>{
            //创建预览容器
            this.createPview(params.p);
            //创建上传按钮
            this.createUpBtn(params.upBtn);
            //选择文件
            this.change();
        })
    }
    //开始选择文件
    change(){
        var that=this;
        this.selectBtn.onchange=function(){
            // this-->this.selectBtn
            // this.files获取文件信息,选中多个文件，一般通过下标选中
            that.data=Array.prototype.slice.call(this.files);//files为属性
            that.check();
        }
    }
    check(){
        var that=this;
        var temp=[];
        for(let i=0;i<this.data.length;i++){
            temp[i]=this.data[i];
            let obj=this.createList(this.data[i]);
            this.list[i]=obj;
            obj.del.index=i;
            //obj--->Object
            //          bar: div
            //          del: div
            //          error: div
            //          list: div
            // 鼠标移入效果
            (function(obj){
                obj.list.onmouseenter=function () {
                    obj.del.style.display='block';
                }
                obj.list.onmouseleave=function(){
                    obj.del.style.display='none';
                }
            })(obj)
            //删除
            obj.del.onclick=function(){
                //移除父元素
                this.parentNode.parentNode.removeChild(this.parentNode);
                let tempdata=temp[this.index];
                for(let j=0;j<that.data.length;j++){
                    if(that.data[j]==tempdata){
                        that.data.splice(j,1);
                        that.list.splice(j,1);
                    }
                }
            }
            //判断类型
            if(this.type.indexOf(this.data[i].type)<0){
                let tempdata=temp[this.index];
                for(let j=0;j<that.data.length;j++){
                    if(that.data[j]==tempdata){
                        that.data.splice(j,1);
                        that.list.splice(j,1);
                    }
                }
                obj.error.style.display='block';
                obj.error.innerHTML='类型错误';
            }
            //判断大小
            if(this.data[i]){
                if(this.size<this.data[i].size){
                    let tempdata=temp[this.index];
                    console.log(1)
                    for(let j=0;j<that.data.length;j++){
                        if(that.data[j]==tempdata){
                            that.data.splice(j,1);
                            that.list.splice(j,1);
                        }
                    }
                    obj.error.style.display='block';
                    obj.error.innerHTML='文件太大';
                }
            }

        }
    }
    createList(data){
        // data--->this.data[i]
        //图片列表容器
        var list=document.createElement('div');
        list.style.cssText=this.listStyle;
        list.style.position='relative';

        //图片显示
        if(this.type.indexOf(data.type)>-1){
            var file=new FileReader();
            file.onload=function(e){
                list.style.background="url("+e.target.result+")";
                list.style.backgroundSize='cover';
            }
            file.readAsDataURL(data);
        }else{
            list.innerHTML='未知错误';
        }

        //进度条容器
        var progress=document.createElement('div');
        progress.style.cssText=this.progressStyle;
        //进度条
        var bar=document.createElement('div');
        bar.style.cssText=this.barStyle;
        //错误
        var error=document.createElement('div');
        error.style.cssText=this.errorStyle;
        error.innerHTML=this.errorCon;
        error.style.display='none';
        //删除
        var del=document.createElement('div');
        del.style.cssText=this.delStyle;
        del.innerHTML=this.delCon;
        list.appendChild(del);
        del.style.display='none';

        list.appendChild(error);
        list.appendChild(progress);
        progress.appendChild(bar);
        this.p.appendChild(list);
        return{
            del:del,
            list:list,
            bar:bar,
            error:error
        }
    }
    createSelect(parent,selectBtn,callback){
        if(!parent){
            console.log('必须指定父元素');
        }
        if(selectBtn){
            $this.selectBtn=selectBtn;
            exit;
        }
        //创建div样式
        var selectBox=document.createElement('div');
        selectBox.style.cssText=this.selectBtnStyle;
        selectBox.innerHTML=this.selectBtnCon;
        selectBox.style.position='relative';
        selectBox.style.textAlign='center';
        parent.appendChild(selectBox);
        selectBox.style.lineHeight=selectBox.offsetHeight+"px";
        //创建input按钮
        var files=document.createElement('input');
        files.type=this.filename;
        files.style.cssText="width:100%;height:100%;opacity:0;position:absolute;top:0;left:0;";
        selectBox.appendChild(files);
        //设置全局属性
        this.parent=parent;
        this.selectBtn=files;
        callback();
    }
    createPview(obj){
        if(obj){
            this.p=obj;
        }else{
            var p=document.createElement('div');
            p.style.cssText=this.pStyle;
            this.parent.appendChild(p);
            this.p=p;
        }
    }
    createUpBtn(obj){
        if(obj){
            this.upBtn=obj;
        }else{
            var divs=document.createElement('div');
            divs.style.cssText=this.upBtnStyle;
            divs.innerHTML=this.upBtnCon;
            divs.style.textAlign='center';
            this.parent.appendChild(divs);
            divs.style.lineHeight=divs.offsetHeight+'px';
            this.upBtn=divs;
        }
    }
    //上传
    up(url,callback){
        var that=this;
        this.upBtn.onclick=function(e){
            for(let i=0;i<that.data.length;i++){
                var ajax=window.XMLHttpRequest?new XMLHttpRequest():ActiveXObject('Microsoft.XMLHTTP');
                var form=new FormData();
                form.append(that.filename,that.data[i]);
                var arr=[];
                !function(i,ajax){
                    ajax.onload=function(){
                        arr.push(ajax.response);
                        if(callback){
                            callback(arr.join(';'));
                        }
                    }
                    ajax.upload.onprogress=function(e){
                        let bili=e.loaded/e.total*100+'%';
                        that.list[i].bar.style.width=bili;
                    }
                }(i,ajax)
                ajax.open('post',url);
                ajax.send(form);
            }

        }
    }
}