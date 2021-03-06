<?php
use yii\helpers\Url;

$this->title = Yii::t('app', 'القواعد الارشادية');
?>
<h1>
    <?= $this->title ?>
</h1>
<p class="has-text-right is-italic">
    Last Modified: 2020-04-10
</p>
<p>
    لأجل حفظ الأمان في المجتمع, هناك بعض القواعد الارشادية التي يلزم عليك اتباعها <br>
	باستخدام ديسبورد, انت توافق للقوانين الارشادية التالية:
</p>
<ul>
    <li>
      استخدام الكلمات البذيئة, او اي محتوى غير امن للعمل لتقديرنا في تعريف السيرفر (الصورة, الوصف و الاسم), رأي او اي محتوى اخر الذي يمكن ان يرى من المستخدمين الاخرين في ديسبورد غير مسموح. هذا سوف يأدي الى حذف المحتوى, لكن, سوف يمكنك ان تعيد تنزيل المحتوى بالغة المناسبة.
    </li>
    <li>
       لا يمكنك كسر اي قوانين او انظمة في مكان وجودك او ان ترقي كسرهم.
    </li>
    <li>
        السيرفرات التي تكسر <a href="https://discordapp.com/guidelines" target="_blank">Discord Community Guidelines</a> غير مسموحة.
    </li>
    <li>
        استخدام البوتات او اي نصوص (سكربت) للقيام باي اعمال تلقائيا مثل bumping السيرفر ("auto-bump") غير مسموح. Bumping, تنزيل الاراء وغيره. يجب ان يقام به يدويا.
    </li>
    <li>
        لا يمكنك عرض سيرفرات بالهدف الواحد باعادة توجيه او الاعلان عن سيرفرات اخرى او غير وجود محتوى (لتقديرنا).
    </li>
    <li>
        لا يمكنك ان تكافئ او تجبر المستخدمين لكي يفعلوا اي شيء في ديسبورد. على سبيل المثال, لا يمكنك مكافأة مستخدمين سيرفرك لتنزيل رأي جيد على سيرفر او جبرهم على ان يفعلوا bump لسيرفر.
    </li>
    <li>
        لا يمكنك انتاج اكثر من حساب ديسكورد لتنزيل اراء متعددة. فقط انزل رأي واحد لكل شخص.
    </li>
    <li>
        كل السيرفرات التي اساسها غير امن للعمل (لتقديرنا) يجب ان تكون محددة "NSFW" (غير امن للعمل) في ديسبورد.
    </li>
</ul>

<p>
    انظر ايضا <a href="<?= Url::to(['/site/tos']) ?>"><?= Yii::t('app', 'شروط الخدمة'); ?></a>
</p>
