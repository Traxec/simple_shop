<template>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">注册</div>

				<div class="panel-body form-horizontal">

					<div class="form-group">
						<label for="name" class="col-md-4 control-label">用户名</label>

						<div class="col-md-6">
							<input id="name" type="text" class="form-control" name="name" value="" required autofocus>

							<span class="help-block">
								<strong></strong>
							</span>
						</div>
					</div>

					<div class="form-group">
						<label for="email" class="col-md-4 control-label">E-Mail 地址</label>

						<div class="col-md-6">
							<input id="email" type="email" class="form-control" name="email" value="" required>

							<span class="help-block">
								<strong></strong>
							</span>
						</div>
					</div>

					<div class="form-group">
						<label for="password" class="col-md-4 control-label">密码</label>

						<div class="col-md-6">
							<input id="password" type="password" class="form-control" name="password" required>

							<span class="help-block">
								<strong></strong>
							</span>
						</div>
					</div>

					<div class="form-group">
						<label for="password-confirm" class="col-md-4 control-label">再次输入密码</label>

						<div class="col-md-6">
							<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
						</div>
					</div>

					<div class="form-group">
						<label for="captcha" class="col-md-4 control-label">验证码</label>

						<div class="col-md-4">
							<input id="captcha" class="form-control" name="captcha" >
							<span class="help-block">
								<strong></strong>
							</span>
						</div>
						<img class="col-md-2 pull-left thumbnail captcha" src="/captcha/flat" onclick="this.src='/captcha/flat?'+Math.random()" title="点击图片重新获取验证码">
					</div>

					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<button type="submit" class="btn btn-primary">
								注册 
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
