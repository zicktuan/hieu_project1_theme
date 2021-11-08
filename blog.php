<section class="content-vttt">
			<div class="container">
				<div class="col-seach">
					<div class="seach-sm">
						<div class="col-seach-line">
							<a href="#boxseach1"  class="accordion-toggle1 collapsed tit-seach-sm" aria-expanded="false" data-toggle="collapse">
								Lĩnh vực:
							</a>
							<form>
								<div class="collapse form-lv " id="boxseach1">
									<div class="line"><input type="checkbox" class="check-vttt" id="lv"><label for="lv">Offshore</label></div>
									<div class="line"><input type="checkbox" class="check-vttt" id="lv1"><label for="lv1">DX Solution and Product</label></div>
									<div class="line"><input type="checkbox" class="check-vttt" id="lv2"><label for="lv2">BO</label></div>
									<div class="line"><input type="checkbox" class="check-vttt" id="lv3"><label for="lv3">Internet Service</label></div>
								</div>
							</form>
						</div>
						<div class="col-seach-line">
							<a href="#boxseach2"  class="accordion-toggle1 collapsed tit-seach-sm" aria-expanded="false" data-toggle="collapse">
								Địa điểm:
							</a>
							<form>
								<div class="collapse form-lv " id="boxseach2">
									<div class="line"><input type="checkbox" class="check-vttt" id="dd"><label for="dd">Hà Nội</label></div>
									<div class="line"><input type="checkbox" class="check-vttt" id="dd1"><label for="dd1">Hồ Chí Minh</label></div>
									<div class="line"><input type="checkbox" class="check-vttt" id="dd2"><label for="dd2">Đà Nẵng</label></div>
									<div class="line"><input type="checkbox" class="check-vttt" id="dd3"><label for="dd3">Nhật Bản</label></div>
								</div>
							</form>
						</div>
						<div class="col-seach-line">
							<a href="#boxseach3"  class="accordion-toggle1 collapsed tit-seach-sm" aria-expanded="false" data-toggle="collapse">
								Cấp bậc:
							</a>
							<form>
								<div class="collapse form-lv " id="boxseach3">
									<div class="line"><input type="checkbox" class="check-vttt" id="cb"><label for="cb">Internship</label></div>
									<div class="line"><input type="checkbox" class="check-vttt" id="cb1"><label for="cb1">Experienced</label></div>
									<div class="line"><input type="checkbox" class="check-vttt" id="cb2"><label for="cb2">Junior</label></div>
									<div class="line"><input type="checkbox" class="check-vttt" id="cb3"><label for="cb3">Middle</label></div>
									<div class="line"><input type="checkbox" class="check-vttt" id="cb4"><label for="cb4">Senior</label></div>
									<div class="line"><input type="checkbox" class="check-vttt" id="cb5"><label for="cb5">Team lead</label></div>
									<div class="line"><input type="checkbox" class="check-vttt" id="cb6"><label for="cb6">Manager</label></div>
									<div class="line"><input type="checkbox" class="check-vttt" id="cb7"><label for="cb7">Master</label></div>
								</div>
							</form>
						</div>
					</div>
					<div class="seach-pc">
						<div class="col-seach-line">
							<h5>Lĩnh vực: </h5>
							<form>
							  <div class="form-lv">
								
									<div class="line"><input type="checkbox" class="check-vttt" id="lv"><label for="lv">Offshore</label></div>
									<div class="line"><input type="checkbox" class="check-vttt" id="lv1"><label for="lv1">DX Solution and Product</label></div>
									<div class="line"><input type="checkbox" class="check-vttt" id="lv2"><label for="lv2">BO</label></div>
									<div class="line"><input type="checkbox" class="check-vttt" id="lv3"><label for="lv3">Internet Service</label></div>
								</div>
							  
							</form>
						</div>
						<div class="col-seach-line">
							<h5>Địa điểm: </h5>
							<form>
							  <div class="form-lv">
								<div class="line"><input type="checkbox" class="check-vttt" id="dd"><label for="dd">Hà Nội</label></div>
								<div class="line"><input type="checkbox" class="check-vttt" id="dd1"><label for="dd1">Hồ Chí Minh</label></div>
								<div class="line"><input type="checkbox" class="check-vttt" id="dd2"><label for="dd2">Đà Nẵng</label></div>
								<div class="line"><input type="checkbox" class="check-vttt" id="dd3"><label for="dd3">Nhật Bản</label></div>
							  </div>
							</form>
						</div>
						<div class="col-seach-line">
							<h5>Cấp bậc: </h5>
							<form>
							  <div class="form-lv">
								<div class="line"><input type="checkbox" class="check-vttt" id="cb"><label for="cb">Internship</label></div>
								<div class="line"><input type="checkbox" class="check-vttt" id="cb1"><label for="cb1">Experienced</label></div>
								<div class="line"><input type="checkbox" class="check-vttt" id="cb2"><label for="cb2">Junior</label></div>
								<div class="line"><input type="checkbox" class="check-vttt" id="cb3"><label for="cb3">Middle</label></div>
								<div class="line"><input type="checkbox" class="check-vttt" id="cb4"><label for="cb4">Senior</label></div>
								<div class="line"><input type="checkbox" class="check-vttt" id="cb5"><label for="cb5">Team lead</label></div>
								<div class="line"><input type="checkbox" class="check-vttt" id="cb6"><label for="cb6">Manager</label></div>
								<div class="line"><input type="checkbox" class="check-vttt" id="cb7"><label for="cb7">Master</label></div>
								
							  </div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-content">

					<div class="col-tit-line-vttt">
						<p class="tit-vttt">các vị trí đang tuyển dụng</p>
						<p class="txt-vttt-right">60 Vị Trí</p>
					</div>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="line-vttt">
                            <a href="<?php echo  get_the_permalink($post->ID); ?>" title="<?php echo $post->post_title ?>" rel="bookmark">
                                <p class="tit-vttt1"><?php the_title(); ?></p>
                            </a>
                            <div class="col-line-vttt">
                                <p class="icon-vt"></p>
                                <p class="txt-vttt">Internship</p>
                            </div>
                            <div class="col-line-vttt">
                                <p class="icon-vt1"></p>
                                <p class="txt-vttt">Hà Nội</p>
                            </div>
                            <div class="col-line-vttt no-rt">
                                <p class="icon-vt2"></p>
                                <p class="txt-vttt">20/9/2021</p>
                            </div>
                        </div>
                    <?php endwhile; endif ?>
					
					<!-- <div class="line-vttt end-line">
						<p class="tit-vttt1">Content marketing</p>
						<div class="col-line-vttt">
							<p class="icon-vt"></p>
							<p class="txt-vttt">Internship</p>
						</div>
						<div class="col-line-vttt">
							<p class="icon-vt1"></p>
							<p class="txt-vttt">Hà Nội</p>
						</div>
						<div class="col-line-vttt no-rt">
							<p class="icon-vt2"></p>
							<p class="txt-vttt">20/9/2021</p>
						</div>
					</div> -->
					<div class="pagination-vttt">
						<nav aria-label="Page navigation example">
						  <ul class="pagination">
							<li class="page-item"><a class="page-link" href="#"><i class="fal fa-chevron-left"></i></a></li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#"> <i class="fal fa-chevron-right"></i> </a></li>
						  </ul>
						</nav>
					</div>
				</div>
			</div>
		</section>