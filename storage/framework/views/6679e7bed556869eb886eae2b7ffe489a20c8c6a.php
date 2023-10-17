<?php
    $cardLogo = \App\Models\Utility::get_file('card_logo/');
?>
<div class="modal-body">
    <div class="row">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-10 col-xxl-12 col-md-12">

                <div class="px-0 card-body">
                    <div class="tab-content" id="pills-tabContent">
                        <?php $__currentLoopData = $businessDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $businessDetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="tab-pane text-capitalize fade show <?php echo e($loop->index == 0 ? 'active' : ''); ?>"
                                id="pills-<?php echo e(strtolower($businessDetail->id)); ?>" role="tabpanel"
                                aria-labelledby="pills-<?php echo e(strtolower($businessDetail->id)); ?>-tab">
                                <div class="row workspace" data-workspace-id=<?php echo e($businessDetail->id); ?>>
                                    <div class="col-4 text-center">
                                        <small class="text-muted"><?php echo e(__('Total Business')); ?></small>
                                        <p class="text-muted text-sm mb-0" data-toggle="tooltip"
                                            data-bs-original-title="<?php echo e(__('Total Business')); ?>"><i
                                                class="ti ti-users text-warning card-icon-text-space  mx-1"></i><span
                                                class="total_business"><?php echo e($totalBusiness); ?></span>

                                        </p>
                                    </div>
                                    <div class="col-4 text-center">
                                        <small class="text-muted"><?php echo e(__('Enable Business')); ?></small>
                                        <p class="text-muted text-sm mb-0" data-toggle="tooltip"
                                            data-bs-original-title="<?php echo e(__('Enable Business')); ?>"><i
                                                class="ti ti-users text-primary card-icon-text-space  mx-1"></i><span
                                                class="enable_business"><?php echo e($totalBusinessEnable); ?></span>
                                        </p>
                                    </div>
                                    <div class="col-4 text-center">
                                        <small class="text-muted"><?php echo e(__('Disable Business')); ?></small>
                                        <p class="text-muted text-sm mb-0" data-toggle="tooltip"
                                            data-bs-original-title="<?php echo e(__('Disable Business')); ?>"><i
                                                class="ti ti-users text-danger card-icon-text-space  mx-1"></i><span
                                                class="disable_business"><?php echo e($totalBusinessDisable); ?></span>
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row my-2 " id="user_section_<?php echo e($businessDetail->id); ?>">
                                    <?php $__currentLoopData = $businessDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $businessDetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-md-6 my-2 ">
                                            <div
                                                class="d-flex align-items-center justify-content-between list_colume_notifi pb-2">
                                                <div class="mb-3 mb-sm-0">
                                                    <h6>
                                                        <img style="width: 30px;height: 30px;" class="rounded-circle "
                                                            src="<?php echo e(isset($val->logo) && !empty($val->logo) ? $cardLogo . '/' . $val->logo : asset('custom/img/logo-placeholder-image-21.png')); ?>"
                                                            alt="">
                                                        <a href="<?php echo e(url('/' . $businessDetail->slug)); ?>"
                                                            target="_blank" class="<?php echo e($businessDetail->admin_enable == 'off' ? 'row-disabled' : ''); ?>"
                                                            id="link_<?php echo e($businessDetail->id); ?>">
                                                            <label for="user"
                                                                class="form-label"><?php echo e($businessDetail->title); ?></label>
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div class="text-end ">
                                                    <div class="form-check form-switch custom-switch-v1 mb-2">
                                                        <input type="checkbox" name="user_disable"
                                                            class="form-check-input input-primary is_disable"
                                                            value="1" data-id='<?php echo e($businessDetail->id); ?>'
                                                            data-name="<?php echo e(__('business')); ?>"
                                                            <?php echo e($businessDetail->admin_enable == 'on' ? 'checked' : ''); ?>>
                                                        <label class="form-check-label" for="user_disable"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).on("click", ".is_disable", function() {
        var id = $(this).attr('data-id');
        var is_disable = ($(this).is(':checked')) ? $(this).val() : 0;
        

        $.ajax({
                url: '<?php echo e(route('business.unable')); ?>',
                type: 'POST',
                data: {
                    "is_disable": is_disable,
                    "id": id,
                    "_token": "<?php echo e(csrf_token()); ?>",
                },
                success: function(data) {
                    $('.total_business').text(data.totalBusiness);
                    $('.enable_business').text(data.totalBusinessEnable);
                    $('.disable_business').text(data.totalBusinessDisable);
                    if (is_disable==0) {
                        $('#link_'+id).addClass('row-disabled');
                    } else{
                        $('#link_'+id).removeClass('row-disabled');
                    }
            }
        });
    });
</script>
<?php /**PATH /home/ubrand/domains/ubrand.vn/public_html/resources/views/business/businessList.blade.php ENDPATH**/ ?>