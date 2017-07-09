								<!-- header-top-first start -->
								<!-- ================ -->
								<div class="header-top-first clearfix">
									<ul class="social-links circle small clearfix hidden-xs">
										<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
										<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
										<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
										<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
										<li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
										<li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
										<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
										<li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
									</ul>
									<div class="social-links hidden-lg hidden-md hidden-sm circle small">
										<div class="btn-group dropdown">
											<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i></button>
											<ul class="dropdown-menu dropdown-animation">
												<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
												<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
												<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
												<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
												<li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
												<li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
												<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
												<li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
											</ul>
										</div>
									</div>
									<ul class="list-inline hidden-sm hidden-xs">
										<li><i class="fa fa-map-marker pr-5 pl-10"></i>我的位置</li>
										<li><i class="fa fa-phone pr-5 pl-10"></i>{{ Auth::user()->created_at }}</li>
										<li><i class="fa fa-envelope-o pr-5 pl-10"></i>{{ Auth::user()->email }}</li>
										<li><i class="">当前时间 :</i><?php echo date('Y-m-d'); ?></li>										
									</ul>
								</div>
								<!-- header-top-first end -->
							</div>
                        @if (Auth::guest())



							<div class="col-xs-9 col-sm-6 col-md-3">

								<!-- header-top-second start -->
								<!-- ================ -->
								<div id="header-top-second"  class="clearfix">

									<!-- header top dropdowns start -->
									<!-- ================ -->
									<div class="header-top-dropdown text-right">
<!-- 										<div class="btn-group">
											<a href="/wbof/template/page-signup.html" class="btn btn-default btn-sm"><i class="fa fa-user pr-10"></i>注册</a>
										</div> -->






										<div class="btn-group dropdown">
											<button type="submit" class="btn dropdown-toggle btn-default btn-sm" data-toggle="dropdown"><i class="fa fa-user pr-10"></i>注册1</button>
											<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
												<li>
													<form method="POST" action="{{ route('register') }}" class="login-form margin-clear" >
													{{ csrf_field() }}
														<div class="form-group has-feedback">
															<label class="control-label">用户名</label>
															<input id="name" type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif															
															<i class="fa fa-user form-control-feedback"></i>
														</div>

														<div class="form-group has-feedback">
															<label class="control-label">电子邮件</label>
															<input id="email" type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif															
															<i class="fa fa-user form-control-feedback"></i>
														</div>


														<div class="form-group has-feedback">
															<label class="control-label">密码</label>
															<input id="password" type="password" name="password" class="form-control" placeholder="" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
															<i class="fa fa-lock form-control-feedback"></i>
														</div>

														<div class="form-group has-feedback">
															<label class="control-label">确认密码</label>
															<input id="password-confirm" type="password" name="password_confirmation" class="form-control" placeholder="" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
															<i class="fa fa-lock form-control-feedback"></i>
														</div>



														<div>
															
														<button type="submit" class="btn btn-default btn-sm">立即注册</button>
														</div>

														<span class="text-center">第三方登录</span>
														<ul class="social-links circle small colored clearfix">
															<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
															<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
															<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
														</ul>
													</form>
												</li>
											</ul>
										</div>






										<div class="btn-group dropdown">
											<button type="submit" class="btn dropdown-toggle btn-default btn-sm" data-toggle="dropdown"><i class="fa fa-lock pr-10"></i>1登录</button>
											<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
												<li>
													<form method="POST" action="{{ route('login') }}" class="login-form margin-clear" >
													{{ csrf_field() }}
														<div class="form-group has-feedback">
															<label class="control-label">用户名或邮箱</label>
															<input id="email" type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif															
															<i class="fa fa-user form-control-feedback"></i>
														</div>
														<div class="form-group has-feedback">
															<label class="control-label">Password</label>
															<input id="password" type="password" name="password" class="form-control" placeholder="" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
															<i class="fa fa-lock form-control-feedback"></i>
														</div>
														<button type="submit" class="btn btn-gray btn-sm">登录</button>
														<span class="pl-5 pr-5">or</span>
														<button type="submit" class="btn btn-default btn-sm">注册</button>
														<ul>
															<li><a href="#">忘记密码?</a></li>
														</ul>
														<span class="text-center">第三方登录</span>
														<ul class="social-links circle small colored clearfix">
															<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
															<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
															<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
														</ul>
													</form>
												</li>
											</ul>
										</div>
									</div>
									<!--  header top dropdowns end -->
								</div>
								<!-- header-top-second end -->
							</div>



                        @else




                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                	<li>
                                		<a href="{{ asset('/admin') }}">后台</a>
                                	</li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        

                    @endif

						</div>
					</div>
				</div>
				<!-- header-top end -->