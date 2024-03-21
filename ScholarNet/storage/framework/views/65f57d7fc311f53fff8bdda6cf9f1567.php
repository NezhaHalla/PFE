<?php if (isset($component)) { $__componentOriginal9881aee3032510140a884de503784c66 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9881aee3032510140a884de503784c66 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.master','data' => ['title' => 'Add Publication']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Add Publication']); ?>
    <div style="padding:20px;">
      <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">
          <form action="<?php echo e(route('publication.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="formbold-input-flex">
              <div>
                <label for="titre" class="formbold-form-label">Title</label>
                <input
                  type="text"
                  name="titre"
                  id="firstname"
                  class="formbold-form-input"
                />
                <?php $__errorArgs = ['titre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div>
                <label for="file" class="formbold-form-label">Image Upload</label>
                <input
                  type="file"
                  name="imagepub"
                  id="file"
                  class="formbold-form-input"
                />
              </div>
            </div>

            <div class="formbold-input-radio-wrapper">
              <label class="formbold-form-label">What will u share ?</label>

              <div class="formbold-radio-flex">
                <div class="formbold-radio-group">
                  <label class="formbold-radio-label">
                    <input class="formbold-input-radio" type="radio" name="role" id="logo_design" value="publication">
                    Publicaion
                    <span class="formbold-radio-checkmark"></span>
                  </label>
                </div>

                <div class="formbold-radio-group">
                  <label class="formbold-radio-label">
                    <input class="formbold-input-radio" type="radio" name="role" id="others" value="announcement">
                    Announcement
                    <span class="formbold-radio-checkmark"></span>
                  </label>
                </div>
                <?php $__errorArgs = ['role'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
            </div>

            <div>
              <label for="message" class="formbold-form-label">Details</label>
              <textarea
                rows="6"
                name="description"
                id="message"
                placeholder="Type your description"
                class="formbold-form-input"
              ></textarea>
              <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger"><?php echo e($message); ?></div>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <button type="submit" class="formbold-btn">
              Add Publication
            </button>
          </form>
        </div>
      </div>
    </div>

    <!-- Move the style block here -->
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
      body {
        font-family: "Inter", sans-serif;
      }
      .formbold-main-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 48px;
      }

      .formbold-form-wrapper {
        margin: 0 auto;
        max-width: 550px;
        width: 100%;
        background: #f9f9f9; /* Changed background color */
        border-radius: 10px; /* Added border-radius for better appearance */
        padding: 30px; /* Increased padding for spacing */
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1); /* Added box shadow for depth */
      }

      .formbold-input-flex {
        display: flex;
        gap: 20px;
        margin-bottom: 20px; /* Increased margin for spacing */
      }
      .formbold-input-flex > div {
        flex: 1; /* Adjusted width for responsiveness */
      }

      .formbold-input-radio-wrapper {
        margin-bottom: 28px;
      }
      .formbold-radio-flex {
        display: flex;
        align-items: center;
        gap: 15px;
      }
      .formbold-radio-label {
        font-size: 14px;
        line-height: 24px;
        color: #07074D;
        position: relative;
        padding-left: 25px;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      .formbold-input-radio {
        position: absolute;
        opacity: 0;
        cursor: pointer;
      }
      .formbold-radio-checkmark {
        position: absolute;
        top: -1px;
        left: 0;
        height: 18px;
        width: 18px;
        background-color: #FFFFFF;
        border: 1px solid #DDE3EC;
        border-radius: 50%;
      }
      .formbold-radio-label .formbold-input-radio:checked ~ .formbold-radio-checkmark {
        background-color: #6A64F1;
      }
      .formbold-radio-checkmark:after {
        content: "";
        position: absolute;
        display: none;
      }

      .formbold-radio-label .formbold-input-radio:checked ~ .formbold-radio-checkmark:after {
        display: block;
      }

      .formbold-radio-label .formbold-radio-checkmark:after {
        top: 50%;
        left: 50%;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #FFFFFF;
        transform: translate(-50%, -50%);
      }

      .formbold-form-input {
        width: 100%;
        padding: 13px 22px;
        border-radius: 5px;
        border: 1px solid #DDE3EC;
        background: #FFFFFF;
        font-weight: 500;
        font-size: 16px;
        color: #07074D;
        outline: none;
        resize: none;
      }
      .formbold-form-input::placeholder {
        color: #536387;
      }
      .formbold-form-input:focus {
        border-color: #6a64f1;
        box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
      }
      .formbold-form-label {
        color: #07074D;
        font-size: 14px;
        line-height: 24px;
        display: block;
        margin-bottom: 10px;
      }

      .formbold-btn {
        text-align: center;
        width: 100%;
        font-size: 16px;
        border-radius: 5px;
        padding: 14px 25px;
        border: none;
        font-weight: 500;
        background-color: #6A64F1;
        color: white;
        cursor: pointer;
        margin-top: 25px;
      }
      .formbold-btn:hover {
        box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
      }

    </style>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9881aee3032510140a884de503784c66)): ?>
<?php $attributes = $__attributesOriginal9881aee3032510140a884de503784c66; ?>
<?php unset($__attributesOriginal9881aee3032510140a884de503784c66); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9881aee3032510140a884de503784c66)): ?>
<?php $component = $__componentOriginal9881aee3032510140a884de503784c66; ?>
<?php unset($__componentOriginal9881aee3032510140a884de503784c66); ?>
<?php endif; ?><?php /**PATH C:\Users\Admin\Documents\PFE\ScholarNet\resources\views/admin/addpublication.blade.php ENDPATH**/ ?>