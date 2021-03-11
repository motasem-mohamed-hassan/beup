<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'    =>  '1',
            'name'  => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456789'),
        ]);

        Role::create(['name' => 'superAdmin']);
        Role::create(['name' => 'admin']);
        $user = User::find(1);
        $user->assignRole('superAdmin');

        DB::table('infos')->insert([
            'id'    =>  '1',
            'phone' =>  '123456789',
            'email' =>  'test@email.com',
            'location_en'   => 'location in EN',
            'location_ar'   => 'العنوان باللغة العربية',
            'whatsapp_link' =>  'https://web.whatsapp.com/'
        ]);

        DB::table('abouts')->insert([
            'id'    => '1',
            'video' => 'https://www.youtube.com/watch?v=jDDaplaOz7Q',
            'head_title_en'                 => 'Why Be Up?',
            'head_title_ar'                 => 'لماذا بى أب ؟',
            'head_description_en'           => 'Be Up FOR MOBILE APPLICATIONS AND WEB SOLUTIONS DEVELOPMENT COMPANY BASED IN CAIRO, EGYPT. with Smart, Simple and Modern Designs TELL ME MORE ABOUT Be Up, Be Up company is specialized in the development and designing for mobile applications on smartphones and tablets for iPhone, Android, and Windows Phone since 2009.

                                                Be Up provides solutions and products that help organizations and companies to raise income and growth rates as well as the development of production and sales through e-commerce solutions on mobile applications development for iPhone and Android aided with artificial intelligence, augmented reality and big data analysis technologies applications on mobile applications and business management software.

                                                Be Up provides technical and software consultations for entrepreneurs and provides them with full practical and scientific support and how to develop and convert their ideas to real projects in mobile applications development on iPhone and Android equipped by the latest methods of using artificial intelligence and big data analysis',
            'head_description_ar'           => '
                                                شركة بى أب متخصصة في مجال برمجة وتصميم تطبيقات الجوال و الموبايل علي الهواتف الذكية والاجهزة اللوحية لأنظمة الايفون والاندرويد والويندوز فون منذ ٢٠٠٩

                                                شركة بى أب تقدم حلول ومنتجات تساعد المؤسسات والشركات علي رفع معدلات الدخل والنمو وايضا تطوير حركة الإنتاج والمبيعات من خلال حلول التجارة الإليكترونية علي تطبيقات الجوال للايفون والاندرويد وتوظيف الذكاء الإصطناعي والواقع المعزز وتحليل البيانات مع تطبيقات الموبايل وبرامج إدارة الأعمال

                                                تقدم  بى أب الاستشارات الفنية والبرمجية لرواد الأعمال كما تقدم لهم كامل الدعم العملي والعلمي وكيفية تطوير وتنفيذ الأفكار ومشاريع تطبيقات الجوال علي الايفون والاندرويد وأحدث طرق استخدام الذكاء الإصطناعي وتحليل البيانات
                                                ',
            'body_title_1_en'               => 'Experience',
            'body_title_1_ar'               => 'خبرة',
            'body_description_1_en'         => 'Be UP is a software house and mobile application development company that has big experience in software generally and mobile applications development especially.

                                                Be UP is a mobile application development compnay based in Cario, Egypt.

                                                Be UP team have developed more than 70 projects in different industries with variant scales of companies, individuals and ideas',
            'body_description_1_ar'         => '
                                                شركة بى أب لديها خبرة في مجال السوفت وير بشكل عام و تطبيقات الجوال والموبايل بشكل خاص منذ عام 2009

                                                فريق شركة بى أب قام بتنفيذ أكثر من 70 مشروع في كافة المجالات ومع أنواع وأحجام مختلفة على مستوى الشركات أو حتى الافراد',
            'body_title_2_en'               => 'Innovation',
            'body_title_2_ar'               => 'ابداع',
            'body_description_2_en'         => 'Be UP team aware and has experience about present market orientation with technologies and future technologies.

                                                Be UP concerned by modern and best science practising in graphic designs, user experience and user interface with native development and programming to produce high efficiency and fast systems regards easy usability.',
            'body_description_2_ar'         => 'بى أب تهتم بأحدث العلوم والطرق من ناحية التصميمات وخبرة المستخدم وطرق البرمجة الأصلية وأفضل الطرق المتبعة لإنتاج أنظمة ذات كفاءة وسرعة مع مراعاة سهولة الاستخدام وكذلك أنظمة تستوعب كل التوسعات المستقبلية في اعمالك

                                                بى أب تعمل على إنتاج أحدث التصميمات العصرية والجذابة و المدروسة بأحدث الخبرات والتوجهات العالمية الأنسب لعملائك
                                                ',
            'body_title_3_en'               => 'Commitment',
            'body_title_3_ar'               => 'التزام',
            'body_description_3_en'         => 'Be UP has a modern project management system based on agile methodology from requirements business analysis to quality control and testing then technical support.',
            'body_description_3_ar'         => '
                                                تعتمد بى أب على نظام سير عمل للمشروعات مبني على أحدث الطرق من تحليل وكتابة متطلبات العمل إلى مرحلة اختبارات الجودة ثم الدعم الفني',
        ]);

        DB::table('categories')->insert([
            'id'    =>  '1',
            'name_en'   =>  'E-Marketing',
            'name_ar'   =>  'التسويق الالكتروني',
            'description_en'    => '',
            'description_ar'    => '',
        ]);
        DB::table('categories')->insert([
            'id'    =>  '2',
            'name_en'   =>  'Designing corporate identities',
            'name_ar'   =>  'تصميم هويات الشركات',
            'description_en'    => '',
            'description_ar'    => '',
        ]);
        DB::table('categories')->insert([
            'id'    =>  '3',
            'name_en'   =>  'Facebook page management',
            'name_ar'   =>  'ادارة صفحات فيسبوك',
            'description_en'    => '',
            'description_ar'    => '',
        ]);
        DB::table('categories')->insert([
            'id'    =>  '4',
            'name_en'   =>  'YouTube channels management',
            'name_ar'   =>  'ادارة قنوات يوتيوب',
            'description_en'    => '',
            'description_ar'    => '',
        ]);
        DB::table('categories')->insert([
            'id'    =>  '5',
            'name_en'   =>  'Create web sites and mobile applications',
            'name_ar'   =>  'انشاء صفحات الويب وتطبيقات الموبايل',
            'description_en'    => '',
            'description_ar'    => '',
        ]);
        DB::table('categories')->insert([
            'id'    =>  '6',
            'name_en'   =>  'designing',
            'name_ar'   =>  'التصميم',
            'description_en'    => '',
            'description_ar'    => '',
        ]);
        DB::table('categories')->insert([
            'id'    =>  '7',
            'name_en'   =>  'Paper prints',
            'name_ar'   =>  'مطبوعات ورقية',
            'description_en'    => '',
            'description_ar'    => '',
        ]);
        DB::table('categories')->insert([
            'id'    =>  '8',
            'name_en'   =>  'Photography and montage',
            'name_ar'   =>  'التصوير والمونتاج',
            'description_en'    => '',
            'description_ar'    => '',
        ]);


    }
}
