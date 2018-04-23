<template>
    <form @submit.prevent="postUser" method="POST" class="form-horizontal">
        <div :class="{}" class="alert">
            {{}}
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-md-2 control-label">E-Mail 地址</label>
            <div class="col-md-4">
                {{user.email}}
            </div>
        </div>
        <div class="form-group">
            <label for="name-field" class="col-md-2 control-label">用户名</label>
            <div class="col-md-4">
                <input type="text" class="form-control" name="name" id="name-field" placeholder="请输入您的用户名" v-model="user.name">
            </div>
        </div>
        <div class="form-group">
            <label for="avatar-field" class="col-md-2 control-label">用户头像</label>
            <div class="col-md-4">
                <img id="show" :src=" user.avatar?user.avatar:'/images/avatar.png' " style="width:60px;height:60px;cursor:pointer" onclick="document.getElementById('avatar-field').click()" class="img-circle" alt="hello">
                <input type="file" name="avatar" class="hide" id="avatar-field" v-on="user.avatar">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">保存</button>
            </div>
        </div>
    </form>
</template>
<script>

export default {
    data() {
        return {
            user:{ },
            message:{ }
        }
    },
    created:function(){
        this.getUser();
    },
    methods: {
        getUser:function () {
            axios.get('/users/user')
                .then( (res) =>{
                    this.user = res.data;
                }).catch((error)=>{
                    throw error;
                });
        },
        postUser:function () {
            axios.put('/users/'+this.user.id,{
                name:this.user.name,
            }).then((res)=>{
                this.message = res.data
            })
        },
    }

}
</script>
