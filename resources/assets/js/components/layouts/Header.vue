<template>
    <div>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <router-link to="/" class="navbar-brand">
                        简单的生活,没那么累。
                    </router-link>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <li><a href="">登录</a></li>
                        <li>
                            <router-link to="/auth/register" class="btn login-btn">
                              <i class="fa fa-user-plus"></i> 
                              注 册
                            </router-link>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <span class="user-avatar pull-left" style="margin-right:8px; margin-top:-5px;">
                                    <img src="" class="img-responsive img-circle" width="30px" height="30px">
                                </span>
                                <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href=""onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> 退出登录 </a>

                                    <form id="logout-form" action="" method="POST" style="display: none;">
                                    </form>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-default navbar-tab">
            <div class="container"> 
                <a href=""></a>
                <ul>
                    <li v-for="goodsCategory in goodsCategories" :id="goodsCategory.id" class="pull-left"
                     @mouseenter="toggleShow(goodsCategory.id)">
                        <a href="#home" data-toggle="">{{goodsCategory.name}}</a>
                    </li>
                    <div class="clearfix"></div>
                </ul>
            </div>
            <div class="menu" @mouseleave="toggleHide()">
                <ul class="container" 
                :class="{'hide': id !== goodsCategory.id}" 
                v-for="goodsCategory in goodsCategories">
                    <li v-for="goods in goodsCategory.children" class="pull-left">
                        <a href=""><img src="images/4f00675caefd0d4177892ad18bfc2df6.png" alt=""><p>{{goods.name}}</p></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</template>


<script>
import axios from 'axios';

export default{
    data() {
        return {
            goodsCategories: null,
            id: null,
        }
    },
    beforeCreate(){
        // this.fetchData()
        axios.get('/api/home')
            .then(response =>{
                this.goodsCategories = response.data
            });
    },
    methods: {
        // fetchData() {
        //     // this.error = this.users = null;
        //     // this.loading = true;

        // },

        toggleShow: function(id){
            this.id = null
            this.id = id
        },

        toggleHide: function(){
            this.id = null
        }

    }

}
    
    // menu hide or show
// $('.navbar-tab').find('li').hover(function(){
//     $('.menu').css('display','block');
//     $('#home'+$(this).find('a').attr('data-toggle')).removeClass('hide');
//     $('#home'+$(this).find('a').attr('data-toggle')).siblings().addClass('hide');
// });
// $('.menu').hover(function(){},function(){
//     $('.menu').css('display','none');
//     $(this).find('ul').addClass('hide');
// });
</script>
