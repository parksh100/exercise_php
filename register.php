<?php

$js_array = [ 'js/member.js'];

$g_title = "약관";

include "header.php";
?>

<main>
    <h1 class="text-center mt-5">회원 약관 및 개인정보 취급방침 동의</h1>
    <h4>회원 약관</h4>
    <textarea class="form-control" name="" id="" cols="30" rows="10">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa doloremque saepe, reprehenderit eos dolores nulla quaerat delectus autem blanditiis quidem aliquam natus non itaque. Alias velit molestias aperiam esse ipsa. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat minima molestias minus, at ratione veniam dolorum facere ipsum ullam, doloremque voluptatibus amet similique voluptates. Blanditiis officiis quae natus praesentium eum.
            </textarea>
    <div class="form-check mt-2">
        <input class="form-check-input" type="checkbox" value="" id="chk_agree1">
        <label class="form-check-label" for="chk_agree1">
            이 약관에 동의하시겠습닊까?
        </label>
    </div>
    <h4 class="mt-3">개인정보 취급방침</h4>
    <textarea class="form-control" name="" id="" cols="30" rows="10">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum delectus optio eveniet expedita perspiciatis quisquam voluptatibus nemo ab? Officia nam qui, illum perspiciatis vitae, eligendi magni accusamus unde odio aliquid repudiandae sed molestiae autem? Dicta magni est facere reiciendis illo maiores doloremque minima perferendis beatae! Dicta excepturi aperiam eligendi mollitia dolor atque nemo quisquam voluptatem, delectus dolorum! Totam laborum quam reiciendis! Nesciunt dicta ad facilis at laborum adipisci maiores odit nam error eos, quaerat voluptatem, delectus pariatur esse nihil fugit harum possimus est. Numquam libero temporibus asperiores iste nobis neque beatae nihil, aspernatur voluptatibus quibusdam qui explicabo, voluptatem, laudantium similique blanditiis veritatis facilis possimus. Reiciendis illum et aspernatur pariatur eius fuga voluptates beatae porro, repellat natus explicabo ratione, facilis possimus adipisci facere, aut rerum laudantium? Pariatur dicta itaque id. Dicta ipsam magnam minima ut, nisi culpa, unde nobis eligendi sapiente eos at explicabo eaque illum animi amet repellendus repudiandae recusandae quia laboriosam rerum, odio non. Quod esse deserunt corporis doloribus vero provident sequi maxime non iste voluptatum error odio similique magni ad porro, sed illo neque at. Nam saepe, quas minus aspernatur labore consequuntur, cumque ut velit voluptas ipsam excepturi repellat. Blanditiis recusandae eius inventore fugit possimus tenetur repellat aliquid, exercitationem officia, accusamus ut dicta id ipsum cum velit eum autem repudiandae, maxime voluptatibus quas corrupti aut quae. Consequuntur nesciunt officiis, sed illum accusantium illo. Tenetur eaque explicabo et debitis asperiores repellat deleniti iusto dolorum, ab hic enim praesentium veritatis tempore delectus quasi voluptatum eius itaque necessitatibus optio, velit nulla? Doloremque hic reprehenderit molestias quaerat inventore accusantium, omnis culpa consectetur architecto corrupti aperiam, dolores cupiditate eum voluptates. Est sequi, doloribus qui quia perferendis laudantium nihil suscipit laborum neque et, odio ullam id voluptate corrupti, quos maxime unde temporibus eos asperiores. Provident asperiores ea nisi aliquam? Delectus reprehenderit laudantium iusto doloribus.
            </textarea>
    <div class="form-check mt-2">
        <input class="form-check-input" type="checkbox" value="" id="chk_agree2">
        <label class="form-check-label" for="chk_agree2">
            위 개인정보 취급방침에 동의하시겠습니까?
        </label>
    </div>
    <div class="d-flex justify-content-center mt-5 gap-2">
        <button class="btn btn-primary" id="btn_register">회원가입</button>
        <button class="btn btn-danger">가입취소</button>

    </div>

    <!-- 회원약관동의를 거쳐야 다른페이지에 접근할 수 있도록 하기 위해서 -->
    <form action="member_input.php" name="register_form" method="post" style="display:none">
        <input type="hidden" name="chk" value="0">

    </form>



</main>

<?php
include "footer.php"
?>