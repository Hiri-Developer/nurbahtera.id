<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= base_url() ?></title>
	<link rel="stylesheet" href="<?= base_url('assets/plugins/treeflex/') ?>treeflex.css">
	<!-- <link rel="stylesheet" href="https://unpkg.com/treeflex/dist/css/treeflex.css"> -->
	<style type="text/css" media="screen">
		span.tf-nc {
			width: 120px;
			height: 150px;
			padding: 10px;
		}

		.NetworkLabelId {
			color: red;
		}

		.NetworkLabelName {
			font-size: 12px;
		}

		.NetworkAddNewLevel {
			position: absolute;
			bottom: 0px;
			padding: 12px;
		}

		.tf-nc:hover {
			background: red;
		}
	</style>
</head>

<body>
	<?php
	$master = json_decode($members, TRUE);
	// var_dump($mem[0]['id']);
	?>
	<div class="tf-tree tf-gap-lg">
		<ul>
			<?php foreach ($master as $l0 => $vl0) : ?>
				<li>
					<!-- level 0 -->
					<span class="tf-nc">
						<div class="profile">
							<img src="<?= base_url('assets/img/favicon.png') ?>" width="50">
							<p class="NetworkLabelId"><?= $master[$l0]['upline'] ?></p>
							<p class="NetworkLabelName"><?= $master[$l0]['name'] ?></p>
						</div>
					</span>
					<ul>
						<!-- == START LEVEL 1 == -->
						<?php if (checkMember($master[$l0]['upline']) != 0) : ?>
							<?php $lvl1 = json_decode(members($master[$l0]['upline']), TRUE);
							foreach ($lvl1 as $l1 => $vl1) : ?>
								<li>
									<!-- level 1 -->
									<span class="tf-nc">
										<img src="<?= base_url('assets/img/favicon.png') ?>" width="50">
										<!-- <p class="NetworkAddNewLevel">LEVEL 1</p> -->
										<p class="NetworkLabelId"><?= $lvl1[$l1]['upline'] ?></p>
										<p class="NetworkLabelName"><?= $lvl1[$l1]['name'] ?></p>
									</span>

									<ul>
										<!-- START LEVEL 2 -->
										<?php if (checkMember($lvl1[$l1]['upline']) != 0) : ?>
											<?php $lvl2 = json_decode(members($lvl1[$l1]['upline']), TRUE);
											foreach ($lvl2 as $l2 => $vl2) : ?>
												<li>
													<span class="tf-nc">
														<img src="<?= base_url('assets/img/favicon.png') ?>" width="50">
														<!-- <p class="NetworkAddNewLevel">LEVEL 2</p> -->
														<p class="NetworkLabelId"><?= $lvl2[$l2]['upline'] ?></p>
														<p class="NetworkLabelName"><?= $lvl2[$l2]['name'] ?></p>
													</span>
													<ul>
														<!-- START LEVEL 3  -->
														<?php if (checkMember($lvl2[$l2]['upline']) != 0) : ?>
															<?php $lvl3 = json_decode(members($lvl2[$l2]['upline']), TRUE);
															foreach ($lvl3 as $l3 => $vl3) : ?>
																<li>
																	<span class="tf-nc">
																		<img src="<?= base_url('assets/img/favicon.png') ?>" width="50">
																		<p class="NetworkLabelId"><?= $lvl3[$l3]['upline'] ?></p>
																		<p class="NetworkLabelName"><?= $lvl3[$l3]['name'] ?></p>
																	</span>
																	<ul>
																		<!-- START LEVEL 4  -->
																		<?php if (checkMember($lvl3[$l3]['upline']) != 0) : ?>
																			<?php $lvl4 = json_decode(members($lvl3[$l3]['upline']), TRUE);
																			foreach ($lvl4 as $l4 => $vl4) : ?>
																				<li>
																					<span class="tf-nc">
																						<img src="<?= base_url('assets/img/favicon.png') ?>" width="50">
																						<p class="NetworkLabelId"><?= $lvl4[$l4]['upline'] ?></p>
																						<p class="NetworkLabelName"><?= $lvl4[$l4]['name'] ?></p>
																					</span>
																					<ul>
																						<!-- START LEVEL 4  -->
																						<?php if (checkMember($lvl4[$l4]['upline']) != 0) : ?>
																							<?php $lvl5 = json_decode(members($lvl4[$l4]['upline']), TRUE);
																							foreach ($lvl5 as $l5 => $vl5) : ?>
																								<li>
																									<span class="tf-nc">
																										<img src="<?= base_url('assets/img/favicon.png') ?>" width="50">
																										<p class="NetworkLabelId"><?= $lvl5[$l5]['upline'] ?></p>
																										<p class="NetworkLabelName"><?= $lvl5[$l5]['name'] ?></p>
																									</span>
																								</li>
																							<?php endforeach ?>
																							<li>
																								<span class="tf-nc">
																									<img src="<?= base_url('assets/img/add-user.png') ?>" width="50">
																									<p class="NetworkAddNewLevel">Add Member</p>
																								</span>
																							</li>
																						<?php else : ?>
																							<li>
																								<span class="tf-nc">
																									<img src="<?= base_url('assets/img/add-user.png') ?>" width="50">
																									<p class="NetworkAddNewLevel">Add Member</p>
																								</span>
																							</li>
																						<?php endif ?>
																					</ul>
																				</li>
																			<?php endforeach ?>
																			<li>
																				<span class="tf-nc">
																					<img src="<?= base_url('assets/img/add-user.png') ?>" width="50">
																					<p class="NetworkAddNewLevel">Add Member</p>
																				</span>
																			</li>
																		<?php else : ?>
																			<li>
																				<span class="tf-nc">
																					<img src="<?= base_url('assets/img/add-user.png') ?>" width="50">
																					<p class="NetworkAddNewLevel">Add Member</p>
																				</span>
																			</li>
																		<?php endif ?>
																	</ul>
																</li>
															<?php endforeach ?>
															<li>
																<span class="tf-nc">
																	<img src="<?= base_url('assets/img/add-user.png') ?>" width="50">
																	<p class="NetworkAddNewLevel">Add Member</p>
																</span>
															</li>
														<?php else : ?>
															<li>
																<span class="tf-nc">
																	<img src="<?= base_url('assets/img/add-user.png') ?>" width="50">
																	<p class="NetworkAddNewLevel">Add Member</p>
																</span>
															</li>
														<?php endif ?>
													</ul>

												</li>
											<?php endforeach ?>
											<li>
												<span class="tf-nc">
													<img src="<?= base_url('assets/img/add-user.png') ?>" width="50">
													<p class="NetworkAddNewLevel">Add Member</p>
												</span>
											</li>
										<?php else : ?>
											<li>
												<span class="tf-nc">
													<img src="<?= base_url('assets/img/add-user.png') ?>" width="50">
													<p class="NetworkAddNewLevel">Add Member</p>
												</span>
											</li>
										<?php endif ?>
									</ul>
								</li>
							<?php endforeach ?>
							<li>
								<span class="tf-nc">
									<img src="<?= base_url('assets/img/add-user.png') ?>" width="50">
									<p class="NetworkAddNewLevel">Add Member</p>
								</span>
							</li>
						<?php else : ?>
							<li>
								<span class="tf-nc">
									<img src="<?= base_url('assets/img/add-user.png') ?>" width="50">
									<p class="NetworkAddNewLevel">Add Member</p>
								</span>
							</li>
						<?php endif ?>
						<!-- == END LEVEL 1 == -->
					</ul>
				</li>
			<?php endforeach ?>
		</ul>
	</div>
</body>

</html>