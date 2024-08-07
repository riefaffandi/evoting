<?php if (isset($component)) { $__componentOriginal1c033872f6702129cc9a9b857a6606a850d68107 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\UserLayout::class, []); ?>
<?php $component->withName('user-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="py-3">
        <div class="row h-100 g-0 justify-content-center pb-5">
            <div class="col-lg my-auto">
                <div class="card border-0 shadow rounded bg-light" id="cardCandidates">
                    <div class="card-header border-0 text-center text-uppercase p-3 text-dark shadow-sm">
                        <h3 class="fw-bold">Pilih Kandidat</h3>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center g-5" id="listKandidat">
                            <?php $no = 0; ?>
                            <?php $__currentLoopData = $candidates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $no++; ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="card border-0 shadow-sm rounded-3">
                                    <img src="<?php echo e(asset('storage/candidate/'.$candidate->foto)); ?>" class="card-img-top img-fluid" alt="...">
                                    <div class="card-body">
                                        <p class="text-center fw-bold fs-3">Kandidat <?php echo e($no); ?></p>
                                        <p class="card-title text-center fs-6">
                                            <?php echo e($candidate->nama_calon); ?> <br> <?php echo e($candidate->nama_wakil_calon); ?>

                                        </p>
                                    </div>
                                    <div class="card-footer border-0 bg-light">
                                        <div class="row justify-content-between text-center">
                                            <div class="d-grid gap-2 col-5 mx-auto my-1">
                                                <button class="btn btn-rounded btn-outline-dark btnDetailCandidate" data-id="<?php echo e($candidate->id); ?>" type="button">
                                                    <i class="bi bi-card-list"></i> Detail
                                                </button>
                                            </div>
                                            <div class="d-grid gap-2 col-7 mx-auto my-1">
                                                <?php if(!\App\Models\Vote::find(auth()->id())): ?>
                                                <button class="btn btn-rounded btn-primary btnSelectCandidate" data-url="<?php echo e(route('voting.candidate', $candidate->id)); ?>" data-id="<?php echo e($candidate->id); ?>" data-calon="<?php echo e($candidate->nama_calon); ?>" data-wakil="<?php echo e($candidate->nama_wakil_calon); ?>" data-kandidat="Kandidat <?php echo e($no); ?>" type="button">
                                                    <i class="bi bi-hand-index-thumb"></i> Pilih Kandidat <?php echo e($no); ?>

                                                </button>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1c033872f6702129cc9a9b857a6606a850d68107)): ?>
<?php $component = $__componentOriginal1c033872f6702129cc9a9b857a6606a850d68107; ?>
<?php unset($__componentOriginal1c033872f6702129cc9a9b857a6606a850d68107); ?>
<?php endif; ?><?php /**PATH D:\tes\evoting\resources\views/user/voting.blade.php ENDPATH**/ ?>