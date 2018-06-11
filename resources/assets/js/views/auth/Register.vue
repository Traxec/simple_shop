<template>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">注册</div>


				<div class="panel-body form-horizontal">
                    <p class="col-md-6 col-md-offset-4" :class="textStatus" v-for="message in messages">{{ message[0] }}</p>

					<div class="form-group">
						<label for="name" class="col-md-4 control-label">用户名</label>

						<div class="col-md-6">
							<input v-model="name" v-validator:input.required="{ regex: /^[a-zA-Z]+\w*\s?\w*$/, error: '用户名要求以字母开头的单词字符' }" id="name" type="text" class="form-control" name="name" required autofocus>

							<span class="help-block">
								<strong></strong>
							</span>
						</div>
					</div>

					<div class="form-group">
						<label for="email" class="col-md-4 control-label">E-Mail 地址</label>

						<div class="col-md-6">
							<input v-model="email" v-validator:input.required="{ regex: /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/, error: '邮箱地址正确格式为 xxx@xxx.xxx' }" id="email" type="email" class="form-control" name="email" required>

							<span class="help-block">
								<strong></strong>
							</span>
						</div>
					</div>

					<div class="form-group">
						<label for="password" class="col-md-4 control-label">密码</label>

						<div class="col-md-6">
							<input id="password" v-model="password" v-validator.required="{ regex: /^\w{6,16}$/, error: '密码要求 6 ~ 16 个单词字符' }" type="password" class="form-control" name="password" required>

							<span class="help-block">
								<strong></strong>
							</span>
						</div>
					</div>

					<div class="form-group">
						<label for="password-confirm" class="col-md-4 control-label">再次输入密码</label>

						<div class="col-md-6">
							<input id="password_confirmation" v-model="password_confirmation" v-validator.required="{ target: '#password' }" type="password" class="form-control" name="password_confirmation" required>
						</div>
					</div>

					<div class="form-group">
						<label for="captcha" class="col-md-4 control-label">图片验证码</label>

						<div class="col-md-4">
							<input v-model="captcha" v-validator.required="{ title: '图片验证码' }" id="captcha" class="form-control" name="captcha" >
							<span class="help-block">
								<strong></strong>
							</span>
						</div>
						<img class="col-md-2 pull-left thumbnail captcha" src="/captcha/flat" onclick="this.src='/captcha/flat?'+Math.random()" title="点击图片重新获取验证码">
					</div>

					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<button type="submit" class="btn btn-primary" @click="submit">
								注册 
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
	export default{
		name: 'Register',
		data() {
			return {
				name: '',
				email: '',
				password: '',
				password_confirmation: '',
				captcha: '',
                messages: '',
                textStatus:'text-danger',
			}
		},
		methods: {
            submit() {
                const data = {
                    name: this.name,
                    email: this.email,
                    password: this.password,
                    password_confirmation: this.password_confirmation,
                    captcha: this.captcha,
                }
                axios.post('/api/user',data)
                    .then((response) => {
                        if(response.status == 200){
                            this.textStatus = 'text-success',
                                this.messages = response.data.message
                        }
                        console.log(response)
                    })
                    .catch((error) => {
                        if(error.response.status == 422){
                            this.textStatus = 'text-danger',
                            this.messages = error.response.data.errors
                            //console.log(error.response.data.errors);
                        }
                    });
            },
		},


	}
</script>
