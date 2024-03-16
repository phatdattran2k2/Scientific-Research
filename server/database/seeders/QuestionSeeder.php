<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            //2018
            //1
            [
                'reading_test_id' => null,
                'content' => 'Silas is talking to his roommate, Salah, about the Olympic Games.<br>- Silas: "Do you think our country can host the Olympic Games some day in the future?"<br>- Salah: "____. We can\'t afford such a big event."',
                'answer_a' => '<b>A</b>. You can say that again',
                'answer_b' => '<b>B</b>. I can\'t agree with you no more',
                'answer_c' => '<b>C</b>. Yes, you\'re right',
                'answer_d' => '<b>D</b>. No, I don\'t think so',
                'correct_answer' => '<b>D</b>. No, I don\'t think so',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => null,
                'content' => 'Laura is telling Bob about her exam results.<br>- Laura:"____"<br>- Bob:"That\'s great. Congratulations!"',
                'answer_a' => '<b>A</b>. I hope I\'ll pass the exam tomorrow.',
                'answer_b' => '<b>B</b>. I\'ve passed the exam with an A.',
                'answer_c' => '<b>C</b>. I\'ll get the exam results tomorrow.',
                'answer_d' => '<b>D</b>. I didn\'t do well in the exam',
                'correct_answer' => '<b>B</b>. I\'ve passed the exam with an A.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //closest
            [
                'reading_test_id' => null,
                'content' => 'Thanks to highly <b>sophisticated</b> technology, scientists have made many important discoveries in different fields.',
                'answer_a' => '<b>A</b>. accessible',
                'answer_b' => '<b>B</b>. confusing',
                'answer_c' => '<b>C</b>. effective',
                'answer_d' => '<b>D</b>. advanced',
                'correct_answer' => '<b>D</b>. advanced',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => null,
                'content' => 'It is firmly believed that books are a primary means for <b>disseminating</b> knowledge and information.',
                'answer_a' => '<b>A</b>. classifying',
                'answer_b' => '<b>B</b>. distributing',
                'answer_c' => '<b>C</b>. adopting',
                'answer_d' => '<b>D</b>. inventing',
                'correct_answer' => '<b>B</b>. distributing',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //opposite
            [
                'reading_test_id' => null,
                'content' => 'With price increases on most neccessities, many people have to <b>tighten their belt</b> for fear of getting into financial difficulties',
                'answer_a' => '<b>A</b>. dress in loose clothes',
                'answer_b' => '<b>B</b>. spend money freely',
                'answer_c' => '<b>C</b>. save on daily expenses',
                'answer_d' => '<b>D</b>. put on tighter belts',
                'correct_answer' => '<b>B</b>. spend money freely',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => null,
                'content' => 'Today the number of start-ups in Vietnam is <b>mounting</b> as the goverment has created favourable conditions for them to develop their bussiness.',
                'answer_a' => '<b>A</b>. peaking',
                'answer_b' => '<b>B</b>. varying',
                'answer_c' => '<b>C</b>. decreasing',
                'answer_d' => '<b>D</b>. rising',
                'correct_answer' => '<b>D</b>. rising',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //pronunce
            [
                'reading_test_id' => null,
                'content' => null,
                'answer_a' => '<b>A</b>. delay<u>s</u>',
                'answer_b' => '<b>B</b>. begin<u>s</u>',
                'answer_c' => '<b>C</b>. attract<u>s</u>',
                'answer_d' => '<b>D</b>. believe<u>s</u>',
                'correct_answer' => '<b>C</b>. attract<u>s</u>',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => null,
                'content' => null,
                'answer_a' => '<b>A</b>. h<u>ea</u>d',
                'answer_b' => '<b>B</b>. b<u>ea</u>',
                'answer_c' => '<b>C</b>. m<u>ea</u>l',
                'answer_d' => '<b>D</b>. t<u>ea</u>m',
                'correct_answer' => '<b>A</b>. h<u>ea</u>d',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //stressed
            [
                'reading_test_id' => null,
                'content' => null,
                'answer_a' => '<b>A</b>. sympathy',
                'answer_b' => '<b>B</b>. poverty',
                'answer_c' => '<b>C</b>. equipment',
                'answer_d' => '<b>D</b>. character',
                'correct_answer' => '<b>C</b>. equipment',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => null,
                'content' => null,
                'answer_a' => '<b>A</b>. intend',
                'answer_b' => '<b>B</b>. install',
                'answer_c' => '<b>C</b>. follow',
                'answer_d' => '<b>D</b>. decide',
                'correct_answer' => '<b>C</b>. follow',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //correct
            [
                'reading_test_id' => null,
                'content' => 'It ____ to reason that Jason passed the exam with flying colours on account of his working hard during the term.',
                'answer_a' => '<b>A</b>. comes',
                'answer_b' => '<b>B</b>. gets',
                'answer_c' => '<b>C</b>. stands',
                'answer_d' => '<b>D</b>. lays',
                'correct_answer' => '<b>C</b>. stands',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => null,
                'content' => 'Our father suggested ____ to Da Nang for this summer holiday.',
                'answer_a' => '<b>A</b>. to going',
                'answer_b' => '<b>B</b>. going',
                'answer_c' => '<b>C</b>. go',
                'answer_d' => '<b>D</b>. to go',
                'correct_answer' => '<b>B</b>. going',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => null,
                'content' => 'The patients ____ with the new drug showed better signs of recovery than those receiving conventional medicine',
                'answer_a' => '<b>A</b>. treated',
                'answer_b' => '<b>B</b>. having treated',
                'answer_c' => '<b>C</b>. treating',
                'answer_d' => '<b>D</b>. who treated',
                'correct_answer' => '<b>D</b>. who treated',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => null,
                'content' => 'Only after she ____ from a severe illness did she realise the importance of good health',
                'answer_a' => '<b>A</b>. would recover',
                'answer_b' => '<b>B</b>. has recoverd',
                'answer_c' => '<b>C</b>. had recoverd',
                'answer_d' => '<b>D</b>. was recovering',
                'correct_answer' => '<b>C</b>. had recoverd',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => null,
                'content' => 'Several measures have been proposed to ____ the problem of unemployment among university graduates',
                'answer_a' => '<b>A</b>. pose',
                'answer_b' => '<b>B</b>. admit',
                'answer_c' => '<b>C</b>. address',
                'answer_d' => '<b>D</b>. create',
                'correct_answer' => '<b>C</b>. address',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => null,
                'content' => 'There is no excuse for your late submission! You ____ the report by last Friday',
                'answer_a' => '<b>A</b>. might\'t have finished',
                'answer_b' => '<b>B</b>. should have finished',
                'answer_c' => '<b>C</b>. need\'t have finished',
                'answer_d' => '<b>D</b>. must have finished',
                'correct_answer' => '<b>B</b>. should have finished',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => null,
                'content' => 'The presenter started his speech with a few ____ jokes to build rapport with the audience',
                'answer_a' => '<b>A</b>. whole-hearted',
                'answer_b' => '<b>B</b>. light-hearted',
                'answer_c' => '<b>C</b>. soft-hearted',
                'answer_d' => '<b>D</b>. kind-hearted',
                'correct_answer' => '<b>B</b>. light-hearted',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => null,
                'content' => 'It is advisable that the apprentice should be ____ to learn ins and outs of the new job.',
                'answer_a' => '<b>A</b>. permissive',
                'answer_b' => '<b>B</b>. noticeable',
                'answer_c' => '<b>C</b>. acceptable',
                'answer_d' => '<b>D</b>. observant',
                'correct_answer' => '<b>D</b>. observant',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => null,
                'content' => 'Mary rarely uses social networks, ____?',
                'answer_a' => '<b>A</b>. isn\'t she',
                'answer_b' => '<b>B</b>. does she',
                'answer_c' => '<b>C</b>. doesn\'t she',
                'answer_d' => '<b>D</b>. is she',
                'correct_answer' => '<b>C</b>. doesn\'t she',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => null,
                'content' => 'Candidates are advised to dress formally to make a good ____ on job interviewers',
                'answer_a' => '<b>A</b>. impress',
                'answer_b' => '<b>B</b>. impressively',
                'answer_c' => '<b>C</b>. impression',
                'answer_d' => '<b>D</b>. impresive',
                'correct_answer' => '<b>C</b>. impression',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => null,
                'content' => 'If Martin were here now, he ____ us to solve this difficult problem',
                'answer_a' => '<b>A</b>. would help',
                'answer_b' => '<b>B</b>. helps',
                'answer_c' => '<b>C</b>. will help',
                'answer_d' => '<b>D</b>. has helped',
                'correct_answer' => '<b>A</b>. would help',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => null,
                'content' => 'You shouldn\'t lose heart; success often comes to those who are not ____ by failures.',
                'answer_a' => '<b>A</b>. left out',
                'answer_b' => '<b>B</b>. put off',
                'answer_c' => '<b>C</b>. switched off',
                'answer_d' => '<b>D</b>. turned on',
                'correct_answer' => '<b>B</b>. put off',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //correction
            [
                'reading_test_id' => null,
                'content' => 'It <b>concerns</b> many sociologists that inadequate <b>parents skills</b> may lead to an increase in the number of <b>incidents</b> of <b>juvenile delinquency</b>.',
                'answer_a' => '<b>A</b>. concerns',
                'answer_b' => '<b>B</b>. parents skills',
                'answer_c' => '<b>C</b>. incidents',
                'answer_d' => '<b>D</b>. juvenile delinquency',
                'correct_answer' => '<b>B</b>. parents skills',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => null,
                'content' => 'It is <b>the ASEAN Para Games</b> that <b>disabled</b> athletes have <b>an opportunity</b> to have their talents and efforts <b>recognised</b>.',
                'answer_a' => '<b>A</b>. the ASEAN Para Games',
                'answer_b' => '<b>B</b>. disabled',
                'answer_c' => '<b>C</b>. an opportunity',
                'answer_d' => '<b>D</b>. recognised',
                'correct_answer' => '<b>A</b>. the ASEAN Para Games',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => null,
                'content' => 'Teenagers <b>is</b> greatly influenced <b>by</b> not only their <b>parents</b> but also as their <b>peers</b>.',
                'answer_a' => '<b>A</b>. is',
                'answer_b' => '<b>B</b>. by',
                'answer_c' => '<b>C</b>. parents',
                'answer_d' => '<b>D</b>. peers',
                'correct_answer' => '<b>A</b>. is',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //sentence closest meaning
            [
                'reading_test_id' => null,
                'content' => 'I find it useful to join the sports club',
                'answer_a' => '<b>A</b>. Joining the sports club is not useful for me.',
                'answer_b' => '<b>B</b>. It is useful for me to join the sports club.',
                'answer_c' => '<b>C</b>. I used to join the sports club.',
                'answer_d' => '<b>D</b>. I never like joining the sports club.',
                'correct_answer' => '<b>B</b>. It is useful for me to join the sports club.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => null,
                'content' => 'It is believed that modern farming methods have greatly improved farmers\'s lives',
                'answer_a' => '<b>A</b>. Farmers are believed to have enjoyed a much better life thanks to modern farming methods.',
                'answer_b' => '<b>B</b>. Modern farming methods were believed to have greatly improved farmers\'s lives.',
                'answer_c' => '<b>C</b>. Modern farming methods are believed to have had negative effects on farmer\'s lives.',
                'answer_d' => '<b>D</b>. People believe that there is little improvement in farmers\'s lives thanks to modern farming methods.',
                'correct_answer' => '<b>A</b>. Farmers are believed to have enjoyed a much better life thanks to modern farming methods.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => null,
                'content' => '"Would you like to go to the show with me?" Anna said to Bella.',
                'answer_a' => '<b>A</b>. Anna reminded Bella to go to the show with her.',
                'answer_b' => '<b>B</b>. Anna persuaded Bella to go to the show with her',
                'answer_c' => '<b>C</b>. Anna encouraged Bella to go to the show with her',
                'answer_d' => '<b>D</b>. Anna invited Bella to go to the show with her.',
                'correct_answer' => '<b>D</b>. Anna invited Bella to go to the show with her.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //combines
            [
                'reading_test_id' => null,
                'content' => 'Mary left home to start an independent life. She realised how much her family meant to her.',
                'answer_a' => '<b>A</b>. Only when Mary realised how much her family meant to her did she leave home to start an independent life.',
                'answer_b' => '<b>B</b>. To realise how much her family meant to her, Mary decided to leave home to start an independent life.',
                'answer_c' => '<b>C</b>. Not until Mary had left home to start an independent life did she realise how much her family meant to her.',
                'answer_d' => '<b>D</b>. Mary left home to start an independent life with a view to realising how much her family meant to her.',
                'correct_answer' => '<b>C</b>. Not until Mary had left home to start an independent life did she realise how much her family meant to her.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => null,
                'content' => 'Kate completed her higher education. She then decided to travel the world before getting a job.',
                'answer_a' => '<b>A</b>. Without completing her higher educations. Kate decided to travel the world before getting a job.',
                'answer_b' => '<b>B</b>. Given that Kate decided to travel the world before getting a job, she completed her higher education.',
                'answer_c' => '<b>C</b>. Having completed her higher education, Kate decided to travel the world before getting a job.',
                'answer_d' => '<b>D</b>. Kate had scarcely travelled the world before getting a job when she completed her higher education.',
                'correct_answer' => '<b>C</b>. Having completed her higher education, Kate decided to travel the world before getting a job.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //reading
            [
                'reading_test_id' => 1,
                'content' => null,
                'answer_a' => '<b>A</b>. on',
                'answer_b' => '<b>B</b>. with',
                'answer_c' => '<b>C</b>. in',
                'answer_d' => '<b>D</b>. out',
                'correct_answer' => '<b>C</b>. in',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => 1,
                'content' => null,
                'answer_a' => '<b>A</b>. when',
                'answer_b' => '<b>B</b>. which',
                'answer_c' => '<b>C</b>. what',
                'answer_d' => '<b>D</b>. where',
                'correct_answer' => '<b>B</b>. which',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => 1,
                'content' => null,
                'answer_a' => '<b>A</b>. or',
                'answer_b' => '<b>B</b>. for',
                'answer_c' => '<b>C</b>. and',
                'answer_d' => '<b>D</b>. but',
                'correct_answer' => '<b>B</b>. for',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => 1,
                'content' => null,
                'answer_a' => '<b>A</b>. pledged',
                'answer_b' => '<b>B</b>. committed',
                'answer_c' => '<b>C</b>. confessed',
                'answer_d' => '<b>D</b>. required',
                'correct_answer' => '<b>A</b>. pledged',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => 1,
                'content' => null,
                'answer_a' => '<b>A</b>. home',
                'answer_b' => '<b>B</b>. house',
                'answer_c' => '<b>C</b>. land',
                'answer_d' => '<b>D</b>. place',
                'correct_answer' => '<b>A</b>. home',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => 2,
                'content' => 'What is passage mainly about?',
                'answer_a' => '<b>A</b>. Advice on how to find a good job',
                'answer_b' => '<b>B</b>. Things to avoid during a job interview',
                'answer_c' => '<b>C</b>. Tips for writing an effective letter or application',
                'answer_d' => '<b>D</b>. Different between résumé and a letter of application',
                'correct_answer' => '<b>C</b>. Tips for writing an effective letter or application',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => 2,
                'content' => 'According to paragraph 1, in a letter of application, the applicant tries to ____.',
                'answer_a' => '<b>A</b>. persuade the employer to grant him/her an interview',
                'answer_b' => '<b>B</b>. get further information about the company',
                'answer_c' => '<b>C</b>. advertise a product to attract more customers',
                'answer_d' => '<b>D</b>. present what he/she wants from the job',
                'correct_answer' => '<b>A</b>. persuade the employer to grant him/her an interview',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => 2,
                'content' => 'The word <b><u>"it"</u></b> in paragraph 2 refers to ____',
                'answer_a' => '<b>A</b>. the letter of application',
                'answer_b' => '<b>B</b>. an opportunity',
                'answer_c' => '<b>C</b>. your work',
                'answer_d' => '<b>D</b>. the résumé',
                'correct_answer' => '<b>A</b>. the letter of application',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => 2,
                'content' => 'The word <b><u>"explicity"</u></b> in paragraph 2 is closest meaning to ____',
                'answer_a' => '<b>A</b>. clearly',
                'answer_b' => '<b>B</b>. shortly',
                'answer_c' => '<b>C</b>. slightly',
                'answer_d' => '<b>D</b>. quickly',
                'correct_answer' => '<b>A</b>. clearly',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => 2,
                'content' => 'According to the passage, which of the following is TRUE about a letter of application?',
                'answer_a' => '<b>A</b>. It should express the applicant\'s dissatisfaction with his/her former employer.',
                'answer_b' => '<b>B</b>. It should refer to the applicant\'s reasons for leaving his/her previous job.',
                'answer_c' => '<b>C</b>. It should be written very briefly, but in a formal style.',
                'answer_d' => '<b>D</b>. It should expand upon the information contained in the application\'s résumé.',
                'correct_answer' => '<b>D</b>. It should expand upon the information contained in the application\'s résumé.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => 2,
                'content' => 'The word <b><u>"broach"</u></b> in paragraph 4 is closest meaning to ___.',
                'answer_a' => '<b>A</b>. avoid',
                'answer_b' => '<b>B</b>. investigate',
                'answer_c' => '<b>C</b>. introduce',
                'answer_d' => '<b>D</b>. understand',
                'correct_answer' => '<b>C</b>. introduce',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => 2,
                'content' => 'According to paragraph 4, in a job interview, the applicant should be ready to ____.',
                'answer_a' => '<b>A</b>. accept any salary offered',
                'answer_b' => '<b>B</b>. negotiate working conditions',
                'answer_c' => '<b>C</b>. mention their expected salary range',
                'answer_d' => '<b>D</b>. talk about the company\'s budget',
                'correct_answer' => '<b>C</b>. mention their expected salary range',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => 3,
                'content' => 'Which of the following best serves as the title for the passage?',
                'answer_a' => '<b>A</b>. Having School Dogs: Pros and Cons',
                'answer_b' => '<b>B</b>. Henry - a Super Dog in Dronfield School',
                'answer_c' => '<b>C</b>. School Dogs: Useful Classroom Assistants',
                'answer_d' => '<b>D</b>. Keeping School Dogs - a Prevalent Trend',
                'correct_answer' => '<b>B</b>. Henry - a Super Dog in Dronfield School',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => 3,
                'content' => 'The word <b><u>"adulation"</u></b> in paragraph 1 is closest meaning to ____.',
                'answer_a' => '<b>A</b>. excessive admiration',
                'answer_b' => '<b>B</b>. deserved attention',
                'answer_c' => '<b>C</b>. considerable controversy',
                'answer_d' => '<b>D</b>. unrealistic expectation',
                'correct_answer' => '<b>A</b>. excessive admiration',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => 3,
                'content' => 'The phrase <b><u>"a handful"</u></b> in paragraph 3 is probably descriptive of a child who is ____.',
                'answer_a' => '<b>A</b>. difficult to control',
                'answer_b' => '<b>B</b>. reluctant to explore',
                'answer_c' => '<b>C</b>. inclined disagree',
                'answer_d' => '<b>D</b>. imposible to understand',
                'correct_answer' => '<b>A</b>. difficult to control',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => 3,
                'content' => 'Which of the following is mentioned in paragraph 3 as a potential impact of keeping a pet?',
                'answer_a' => '<b>A</b>. Stronger tendency to misbehave',
                'answer_b' => '<b>B</b>. Better recovery from illness',
                'answer_c' => '<b>C</b>. A greater desire to influence others',
                'answer_d' => '<b>D</b>. Long-term changes in conduct',
                'correct_answer' => '<b>B</b>. Better recovery from illness',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => 3,
                'content' => 'The word <b><u>"one"</u></b> in paragraph 4 refers to ____.',
                'answer_a' => '<b>A</b>. a school dog',
                'answer_b' => '<b>B</b>. a craze',
                'answer_c' => '<b>C</b>. a Mulbery staff member',
                'answer_d' => '<b>D</b>. a primary school',
                'correct_answer' => '<b>A</b>. a school dog',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => 3,
                'content' => 'According to paragraph 4, which of the following is one of roles played by Muskoka at the Mulbery Bush?',
                'answer_a' => '<b>A</b>. Minimising the number of words mispronounced by its students',
                'answer_b' => '<b>B</b>. Helping its students to reduce their fear of making mistakes',
                'answer_c' => '<b>C</b>. Relieving its teaching staff of unneccessary workload',
                'answer_d' => '<b>D</b>. Encouraging a more proactive approach to teaching literacy',
                'correct_answer' => '<b>B</b>. Helping its students to reduce their fear of making mistakes',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => 3,
                'content' => 'Which of the following best summarises Chris Woodhead\'s viewpoint in paragraph 5?',
                'answer_a' => '<b>A</b>. Teachers underestimate the role of dogs in literacy lessons.',
                'answer_b' => '<b>B</b>. Schools have dogs just to attract media attention.',
                'answer_c' => '<b>C</b>. Students and dogs are inseparable companions in the classroom setting.',
                'answer_d' => '<b>D</b>. Dogs are capable of enlivening classroom atmosphere.',
                'correct_answer' => '<b>B</b>. Schools have dogs just to attract media attention.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'reading_test_id' => 3,
                'content' => 'Which of the following is implied in the passage',
                'answer_a' => '<b>A</b>. Rosie Johnston is more experienced than Wendy Brown in working with animals.',
                'answer_b' => '<b>B</b>. Interaction with Henry is used to boost students\'s learning motivation at Dronfield School.',
                'answer_c' => '<b>C</b>. Administrators at Dronfield School are sceptical as to whether Henry\'s companion will benefit their students',
                'answer_d' => '<b>D</b>. Wendy Brown and Julie Smart are dedicated animal rights activists who wish to get their message across to young people.',
                'correct_answer' => '<b>C</b>. Administrators at Dronfield School are sceptical as to whether Henry\'s companion will benefit their students',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            // thi thu 2018 de 1
            //cau1
            [
                'reading_id' => null,
                'content' => null,
                'answer_a' => '<b>A</b>. h<u>ea</u>vy',
                'answer_b' => '<b>B</b>. h<u>ea</u>d', 
                'answer_c' => '<b>C</b>. w<u>ea</u>ther',
                'answer_d' => '<b>D</b>. <u>ea</u>sy',
                'correct_answer' => '<b>D</b>. <u>ea</u>sy',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau2
            [
                'reading_id' => null,
                'content' => null,
                'answer_a' => '<b>A</b>. process<u>ed</u>',
                'answer_b' => '<b>B</b>. infest<u>ed</u>', 
                'answer_c' => '<b>C</b>. balanc<u>ed</u>',
                'answer_d' => '<b>D</b>. reach<u>ed</u>',
                'correct_answer' => '<b>B</b>. infest<u>ed</u>',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],

            //Mark the letter A, B, C, or D on your answer sheet to indicate the word that differs from the other three in the position of the primary stress in each of the following questions.
            //cau3
            [
                'reading_id' => null,
                'content' => null,
                'answer_a' => '<b>A</b>. applicant',
                'answer_b' => '<b>B</b>. preference', 
                'answer_c' => '<b>C</b>. courteous',
                'answer_d' => '<b>D</b>. appointment',
                'correct_answer' => '<b>D</b>. appointment',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau4
            [
                'reading_id' => null,
                'content' => null,
                'answer_a' => '<b>A</b>. interviewer',
                'answer_b' => '<b>B</b>. concentrate', 
                'answer_c' => '<b>C</b>. comfortable',
                'answer_d' => '<b>D</b>. technology',
                'correct_answer' => '<b>D</b>. technology',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //CLOSEST
            //cau5
            [
                'reading_id' => null,
                'content' => 'Who will replace you to <u>monitor</u> the class on the days you are on duty next week?',
                'answer_a' => '<b>A</b>. support',
                'answer_b' => '<b>B</b>. undermine', 
                'answer_c' => '<b>C</b>. vandalize',
                'answer_d' => '<b>D</b>. manage',
                'correct_answer' => '<b>D</b>. manage',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau6
            [
                'reading_id' => null,
                'content' => 'We, the young, should take actions to raise people\'s awareness of being <u>concerned</u> with sewage processing measures from now on.',
                'answer_a' => '<b>A</b>. indifferent to',
                'answer_b' => '<b>B</b>. carefree with', 
                'answer_c' => '<b>C</b>. interested in',
                'answer_d' => '<b>D</b>. nervous about',
                'correct_answer' => '<b>C</b>. interested in',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //OPPOSITE
            //cau7
            [
                'reading_id' => null,
                'content' => 'That is a <u>well-behaved</u> boy whose behavior has nothing to complain about.',
                'answer_a' => '<b>A</b>. behaving cleverly',
                'answer_b' => '<b>B</b>. behaving nice', 
                'answer_c' => '<b>C</b>. behaving improperly',
                'answer_d' => '<b>D</b>. good behavior',
                'correct_answer' => '<b>C</b>. behaving improperly',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau8
            [
                'reading_id' => null,
                'content' => 'I must have a watch since <u>punctuality</u> is imperative in my new job.',
                'answer_a' => '<b>A</b>. being courteous',
                'answer_b' => '<b>B</b>. being cheerful', 
                'answer_c' => '<b>C</b>. being efficient',
                'answer_d' => '<b>D</b>. being late',
                'correct_answer' => '<b>D</b>. being late',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //correction in each of the following questions.
            //cau9
            [
                'reading_id' => null,
                'content' => 'The longest <u>mountain range</u>, the Mid-Atlantic Range, is <u>not hardly</u> visible because <u>most of</u> it lies <u>under</u> the ocean.',
                'answer_a' => '<b>A</b>. mountain range',
                'answer_b' => '<b>B</b>. not hardly', 
                'answer_c' => '<b>C</b>. most of',
                'answer_d' => '<b>D</b>. under',
                'correct_answer' => '<b>B</b>. not hardly',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau10
            [
                'reading_id' => null,
                'content' => 'The abilities <u>to work</u> hard, follow directions, and <u>thinking</u> independently <u>are</u> some of the criteria <u>for success</u> in the workplace.',
                'answer_a' => '<b>A</b>. to work',
                'answer_b' => '<b>B</b>. thinking', 
                'answer_c' => '<b>C</b>. are',
                'answer_d' => '<b>D</b>. for success',
                'correct_answer' => '<b>B</b>. thinking',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau11
            [
                'reading_id' => null,
                'content' => '<u>Establishing</u> in 1984 <u>for students</u> who wanted to study art and music subjects, LaGuardia <u>was</u> the first public school <u>of its kind</u>.',
                'answer_a' => '<b>A</b>. Establishing',
                'answer_b' => '<b>B</b>. for students', 
                'answer_c' => '<b>C</b>. was',
                'answer_d' => '<b>D</b>. of its kind',
                'correct_answer' => '<b>A</b>. Establishing',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //correct answer to each of the following questions.
            //cau12
            [
                'reading_id' => null,
                'content' => 'We all believe that a happy marriage should be _______ mutual love.',
                'answer_a' => '<b>A</b>. based on',
                'answer_b' => '<b>B</b>. concerned with', 
                'answer_c' => '<b>C</b>. confided in',
                'answer_d' => '<b>D</b>. obliged to',
                'correct_answer' => '<b>A</b>. based on',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau13
            [
                'reading_id' => null,
                'content' => 'The teachers are, at the moment, trying their best _______ all the necessary that their students may need for their critical examination while, sadly, some do not seem to appreciate that.',
                'answer_a' => '<b>A</b>. to prepare',
                'answer_b' => '<b>B</b>. prepared', 
                'answer_c' => '<b>C</b>. preparing',
                'answer_d' => '<b>D</b>. prepare',
                'correct_answer' => '<b>A</b>. to prepare',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau14
            [
                'reading_id' => null,
                'content' => 'A lot of skills and knowledge fields _______.',
                'answer_a' => '<b>A</b>. be prepared and practiced',
                'answer_b' => '<b>B</b>. have to be prepared and practiced', 
                'answer_c' => '<b>C</b>. prepared and practiced',
                'answer_d' => '<b>D</b>. have to be being prepared and practiced',
                'correct_answer' => '<b>B</b>. have to be prepared and practiced',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau15
            [
                'reading_id' => null,
                'content' => 'We arranged to meet at the station, but she didn\'t _______.',
                'answer_a' => '<b>A</b>. get through',
                'answer_b' => '<b>B</b>. turn up', 
                'answer_c' => '<b>C</b>. walk out',
                'answer_d' => '<b>D</b>. wait on',
                'correct_answer' => '<b>B</b>. turn up',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau16
            [
                'reading_id' => null,
                'content' => 'Our professor _______ said we should turn in the assignment on Friday.',
                'answer_a' => '<b>A</b>. specific',
                'answer_b' => '<b>B</b>. specifically', 
                'answer_c' => '<b>C</b>. specifying',
                'answer_d' => '<b>D</b>. specifyingly',
                'correct_answer' => '<b>B</b>. specifically',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau17
            [
                'reading_id' => null,
                'content' => 'They were 30 minutes late because their car _______ down.',
                'answer_a' => '<b>A</b>. got',
                'answer_b' => '<b>B</b>. put', 
                'answer_c' => '<b>C</b>. cut',
                'answer_d' => '<b>D</b>. broke',
                'correct_answer' => '<b>D</b>. broke',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau18
            [
                'reading_id' => null,
                'content' => 'Scientists warn that many of the world\'s great cities are _______ flooding.',
                'answer_a' => '<b>A</b>. being',
                'answer_b' => '<b>B</b>. at risk', 
                'answer_c' => '<b>C</b>. in danger of',
                'answer_d' => '<b>D</b>. endangered',
                'correct_answer' => '<b>C</b>. in danger of',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau19
            [
                'reading_id' => null,
                'content' => 'The replacement of shops such as groceries\' and chemist\'s by cafes _______ the housewives with insufficient facilities for shopping.',
                'answer_a' => '<b>A</b>. leave',
                'answer_b' => '<b>B</b>. have left', 
                'answer_c' => '<b>C</b>. has left',
                'answer_d' => '<b>D</b>. to have left',
                'correct_answer' => '<b>C</b>. has left',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau20
            [
                'reading_id' => null,
                'content' => 'I studied English for four years in high school. _______ had trouble talking with people when I was traveling in the US.',
                'answer_a' => '<b>A</b>. Therefore, I',
                'answer_b' => '<b>B</b>. Otherwise, I', 
                'answer_c' => '<b>C</b>. Although I',
                'answer_d' => '<b>D</b>. However, I',
                'correct_answer' => '<b>D</b>. However, I',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau21
            [
                'reading_id' => null,
                'content' => 'My uncle was _______ ill last summer; however, fortunately, he is now making a slow but steady recovery.',
                'answer_a' => '<b>A</b>. seriously',
                'answer_b' => '<b>B</b>. deeply', 
                'answer_c' => '<b>C</b>. fatally',
                'answer_d' => '<b>D</b>. critically',
                'correct_answer' => '<b>A</b>. seriously',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau22
            [
                'reading_id' => null,
                'content' => 'If you want your son to do better on his exams, I suggest he _______ harder.',
                'answer_a' => '<b>A</b>. will study',
                'answer_b' => '<b>B</b>. studies', 
                'answer_c' => '<b>C</b>. would study',
                'answer_d' => '<b>D</b>. study',
                'correct_answer' => '<b>D</b>. study',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau23
            [
                'reading_id' => null,
                'content' => '_______ the book, please return it to me.',
                'answer_a' => '<b>A</b>. Should you find',
                'answer_b' => '<b>B</b>. Will you be finding', 
                'answer_c' => '<b>C</b>. Will you find',
                'answer_d' => '<b>D</b>. Will you have found',
                'correct_answer' => '<b>A</b>. Should you find',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //Mark the letter A, B, C, or D on your answer sheet to indicate the most suitable response to complete the following exchanges.
            //cau24
            [
                'reading_id' => null,
                'content' => 'Mary invited her friend, Sarah, to have dinner out that night and Sarah accepted. <br>
                            Mary: "Shall we eat out tonight?"<br> – Sarah: "_______."',
                'answer_a' => '<b>A</b>. That\'s a great idea',
                'answer_b' => '<b>B</b>. That\'s acceptable', 
                'answer_c' => '<b>C</b>. You are very welcome',
                'answer_d' => '<b>D</b>. It\'s kind of you to invite',
                'correct_answer' => '<b>A</b>. That\'s a great idea',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau25
            [
                'reading_id' => null,
                'content' => '"Thank you for taking the time to come here in person." <br>– "_______"',
                'answer_a' => '<b>A</b>. It\'s my pleasure.',
                'answer_b' => '<b>B</b>. I don\'t know what time that person comes.', 
                'answer_c' => '<b>C</b>. I\'d love to come. What time?',
                'answer_d' => '<b>D</b>. Do you have time for some gossip?',
                'correct_answer' => '<b>A</b>. It\'s my pleasure.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //closest in meaning to each of the following sentences.
            //cau26
            [
                'reading_id' => null,
                'content' => 'You could not have made a very good impression on them.',
                'answer_a' => '<b>A</b>. You seem to have impressed them very unfavourably.',
                'answer_b' => '<b>B</b>. It\'s impossible that the effect you made on them was particularly positive.', 
                'answer_c' => '<b>C</b>. Something appears to have made them think you are unsuitable.',
                'answer_d' => '<b>D</b>. You should have tried harder to make them think well of you.',
                'correct_answer' => '<b>B</b>. It\'s impossible that the effect you made on them was particularly positive.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau27
            [
                'reading_id' => null,
                'content' => 'Due to the heavy snow, all buses have been cancelled until further notice.',
                'answer_a' => '<b>A</b>. If it weren\'t for the heavy snow, you would notice how much further the bus had to go.',
                'answer_b' => '<b>B</b>. The buses would not have been cancelled if only it had not snowed so much.', 
                'answer_c' => '<b>C</b>. Heavy snow has caused the buses to stop running, though there will be an announcement of when they will start up again.',
                'answer_d' => '<b>D</b>. If this snow keeps up, there will be an announcement to declare that the buses will no longer run.',
                'correct_answer' => '<b>C</b>. Heavy snow has caused the buses to stop running, though there will be an announcement of when they will start up again.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau28
            [
                'reading_id' => null,
                'content' => 'It\'s more than a couple of years since I last went there.',
                'answer_a' => '<b>A</b>. I have never stayed there for longer than two years.',
                'answer_b' => '<b>B</b>. It was only after two years that I went there again.', 
                'answer_c' => '<b>C</b>. I haven\'t been there since my visit over two years ago.',
                'answer_d' => '<b>D</b>. I had never been there until the year before last.',
                'correct_answer' => '<b>C</b>. I haven\'t been there since my visit over two years ago.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //Mark the letter A, B, C, or D on your answer sheet to indicate the sentence that best combines each pair of sentences in the following questions.
            //cau29
            [
                'reading_id' => null,
                'content' => 'The referee brought the football game to a halt. He blew his whistle.',
                'answer_a' => '<b>A</b>. The referee stopped playing football and blowing his whistle.',
                'answer_b' => '<b>B</b>. The referee stopped the football game before he blew his whistle.', 
                'answer_c' => '<b>C</b>. Having stopped the football match, the referee blew his whistle.',
                'answer_d' => '<b>D</b>. The referee brought the football game to a halt by blowing his whistle.',
                'correct_answer' => '<b>D</b>. The referee brought the football game to a halt by blowing his whistle.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau30
            [
                'reading_id' => null,
                'content' => 'We planned to visit Eiffel Tower in the afternoon. We could not afford the fee, however.',
                'answer_a' => '<b>A</b>. As planned, we could not afford the visit to Eiffel Tower in the afternoon because of the fee.',
                'answer_b' => '<b>B</b>. We visited Eiffel Tower in the afternoon though the fee was too high for us.', 
                'answer_c' => '<b>C</b>. We were going to visit Eiffel Tower in the afternoon but the fee was too high for us.',
                'answer_d' => '<b>D</b>. The fee was, however, high enough for us to plan a visit to Eiffel Tower in the afternoon.',
                'correct_answer' => '<b>C</b>. We were going to visit Eiffel Tower in the afternoon but the fee was too high for us.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //Reading 31 ->  35
            //cau31
            [
                'reading_id' => 7,
                'content' => null,
                'answer_a' => '<b>A</b>. rules',
                'answer_b' => '<b>B</b>. reasons', 
                'answer_c' => '<b>C</b>. ways',
                'answer_d' => '<b>D</b>. tests',
                'correct_answer' => '<b>C</b>. ways',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau32
            [
                'reading_id' => 7,
                'content' => null,
                'answer_a' => '<b>A</b>. be understood',
                'answer_b' => '<b>B</b>. be spoken', 
                'answer_c' => '<b>C</b>. be examined',
                'answer_d' => '<b>D</b>. be talked',
                'correct_answer' => '<b>A</b>. be understood',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau33
            [
                'reading_id' => 7,
                'content' => null,
                'answer_a' => '<b>A</b>. easy',
                'answer_b' => '<b>B</b>. expensive', 
                'answer_c' => '<b>C</b>. simple',
                'answer_d' => '<b>D</b>. important',
                'correct_answer' => '<b>D</b>. important',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau34
            [
                'reading_id' => 7,
                'content' => null,
                'answer_a' => '<b>A</b>. perfect',
                'answer_b' => '<b>B</b>. good', 
                'answer_c' => '<b>C</b>. well',
                'answer_d' => '<b>D</b>. fluent',
                'correct_answer' => '<b>C</b>. well',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau35
            [
                'reading_id' => 7,
                'content' => null,
                'answer_a' => '<b>A</b>. know',
                'answer_b' => '<b>B</b>. show', 
                'answer_c' => '<b>C</b>. ask',
                'answer_d' => '<b>D</b>. understand',
                'correct_answer' => '<b>B</b>. show',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //Reading 36 -> 42
            //cau36
            [
                'reading_id' => 8,
                'content' => 'What is the main idea of the passage?',
                'answer_a' => '<b>A</b>. Colorful clothes can change your mood',
                'answer_b' => '<b>B</b>. Emotions and colors are closely related to each other.', 
                'answer_c' => '<b>C</b>. Colors can help you become healthy.',
                'answer_d' => '<b>D</b>. Colors are one of the most exciting.',
                'correct_answer' => '<b>B</b>. Emotions and colors are closely related to each other.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau37
            [
                'reading_id' => 8,
                'content' => 'Which of the following can be affected by color?',
                'answer_a' => '<b>A</b>. Your need for thrills',
                'answer_b' => '<b>B</b>. your friend\'s feelings', 
                'answer_c' => '<b>C</b>. your appetite',
                'answer_d' => '<b>D</b>. your mood',
                'correct_answer' => '<b>D</b>. your mood',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau38
            [
                'reading_id' => 8,
                'content' => 'Who is more influenced by colors you wear?',
                'answer_a' => '<b>A</b>. The people around you are more influenced.',
                'answer_b' => '<b>B</b>. No one is influenced.', 
                'answer_c' => '<b>C</b>. You are more influenced.',
                'answer_d' => '<b>D</b>. The people who wear those colors, not you.',
                'correct_answer' => '<b>C</b>. You are more influenced.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau39
            [
                'reading_id' => 8,
                'content' => 'According to this passage, what creates disease?',
                'answer_a' => '<b>A</b>. wearing the color black',
                'answer_b' => '<b>B</b>. exposing yourself to bright colors', 
                'answer_c' => '<b>C</b>. being open to your emotions',
                'answer_d' => '<b>D</b>. ignoring your emotions',
                'correct_answer' => '<b>D</b>. ignoring your emotions',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau40
            [
                'reading_id' => 8,
                'content' => 'The term <b>"intimately"</b> in paragraph 1 is closest in meaning to',
                'answer_a' => '<b>A</b>. clearly',
                'answer_b' => '<b>B</b>. closely', 
                'answer_c' => '<b>C</b>. obviously',
                'answer_d' => '<b>D</b>. simply',
                'correct_answer' => '<b>B</b>. closely',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau41
            [
                'reading_id' => 8,
                'content' => 'The term <b>"they"</b> in paragraph 3 refers to',
                'answer_a' => '<b>A</b>. emotions',
                'answer_b' => '<b>B</b>. people', 
                'answer_c' => '<b>C</b>. colors',
                'answer_d' => '<b>D</b>. none of the above',
                'correct_answer' => '<b>C</b>. colors',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau42
            [
                'reading_id' => 8,
                'content' => 'Why does the author mention that color and emotions are both vibrations?',
                'answer_a' => '<b>A</b>. to show how color can affect energy levels in the body.',
                'answer_b' => '<b>B</b>. Because they both affect how we feel.', 
                'answer_c' => '<b>C</b>. to prove the relationship between emotions and color.',
                'answer_d' => '<b>D</b>. Because vibrations make you healthy.',
                'correct_answer' => '<b>A</b>. to show how color can affect energy levels in the body.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //Reading 43 -> 50
            //cau43
            [
                'reading_id' => 9,
                'content' => 'What is the main purpose of the passage?',
                'answer_a' => '<b>A</b>. To introduce the idea that dietary fat increases the blood cholesterol level.',
                'answer_b' => '<b>B</b>. To make people know about the relationship between eggs and cholesterol.', 
                'answer_c' => '<b>C</b>. To persuade people that eggs are unhealthy and should not be eaten.',
                'answer_d' => '<b>D</b>. To convince people to eat "designer" eggs and egg substitutes.',
                'correct_answer' => '<b>B</b>. To make people know about the relationship between eggs and cholesterol.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau44
            [
                'reading_id' => 9,
                'content' => 'What has been the cause for changes in the sale of eggs?',
                'answer_a' => '<b>A</b>. Increasing price',
                'answer_b' => '<b>B</b>. Decreased production', 
                'answer_c' => '<b>C</b>. Dietary changes in hens',
                'answer_d' => '<b>D</b>. Concerns about cholesterol',
                'correct_answer' => '<b>D</b>. Concerns about cholesterol',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau45
            [
                'reading_id' => 9,
                'content' => 'What is meant by the phrase <b>"mixed results"</b>?',
                'answer_a' => '<b>A</b>. The results are blended.',
                'answer_b' => '<b>B</b>. The results are a composite of things.', 
                'answer_c' => '<b>C</b>. The results are inconclusive.',
                'answer_d' => '<b>D</b>. The results are mingled together.',
                'correct_answer' => '<b>C</b>. The results are inconclusive.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau46
            [
                'reading_id' => 9,
                'content' => 'Which of the following could best replace the word <b>"somewhat"</b>?',
                'answer_a' => '<b>A</b>. in fact',
                'answer_b' => '<b>B</b>. a little', 
                'answer_c' => '<b>C</b>. indefinitely',
                'answer_d' => '<b>D</b>. a lot',
                'correct_answer' => '<b>B</b>. a little',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau47
            [
                'reading_id' => 9,
                'content' => 'According to the passage, one yolk contains approximately what fraction of the suggested daily limit for human consumption of cholesterol?',
                'answer_a' => '<b>A</b>. 3/4',
                'answer_b' => '<b>B</b>. 2/3', 
                'answer_c' => '<b>C</b>. 1/2',
                'answer_d' => '<b>D</b>. 1/3',
                'correct_answer' => '<b>B</b>. 2/3',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau48
            [
                'reading_id' => 9,
                'content' => 'The word <b>"portrayed"</b> could best be replaced by which of the following?',
                'answer_a' => '<b>A</b>. studied',
                'answer_b' => '<b>B</b>. destroyed', 
                'answer_c' => '<b>C</b>. tested',
                'answer_d' => '<b>D</b>. described',
                'correct_answer' => '<b>D</b>. described',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau49
            [
                'reading_id' => 9,
                'content' => '49. What is the meaning of "back up"?',
                'answer_a' => '<b>A</b>. reverse',
                'answer_b' => '<b>B</b>. advance', 
                'answer_c' => '<b>C</b>. block',
                'answer_d' => '<b>D</b>. support',
                'correct_answer' => '<b>D</b>. support',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau50
            [
                'reading_id' => 9,
                'content' => 'According to the passage, egg substitutes cannot be used to make any of the following types of eggs EXCEPT _______.',
                'answer_a' => '<b>A</b>. boiled',
                'answer_b' => '<b>B</b>. poached', 
                'answer_c' => '<b>C</b>. scrambled',
                'answer_d' => '<b>D</b>. fried',
                'correct_answer' => '<b>C</b>. scrambled',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            // thi thu 2018 de 2 
            //pronunciation in each of the following questions.
            //cau 1
            [
                'reading_id' => null,
                'content' => null,
                'answer_a' => '<b>A</b>. <u>h</u>ornorable',
                'answer_b' => '<b>B</b>. <u>h</u>onest', 
                'answer_c' => '<b>C</b>. <u>h</u>istoric',
                'answer_d' => '<b>D</b>. <u>h</u>eir',
                'correct_answer' => '<b>C</b>. <u>h</u>istoric',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau2
            [
                'reading_id' => null,
                'content' => null,
                'answer_a' => '<b>A</b>. <u>ch</u>ore',
                'answer_b' => '<b>B</b>. <u>ch</u>ange', 
                'answer_c' => '<b>C</b>. <u>ch</u>oice',
                'answer_d' => '<b>D</b>. <u>ch</u>orus',
                'correct_answer' => '<b>D</b>. <u>ch</u>orus',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],

            //Mark the letter A, B, C, or D on your answer sheet to indicate the word that differs from the other three in the position of the primary stress in each of the following questions.
            //cau3
            [
                'reading_id' => null,
                'content' => null,
                'answer_a' => '<b>A</b>. terrific',
                'answer_b' => '<b>B</b>. Pacific', 
                'answer_c' => '<b>C</b>. Arabic',
                'answer_d' => '<b>D</b>. mechanic',
                'correct_answer' => '<b>C</b>. Arabic',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],

            //cau4
            [
                'reading_id' => null,
                'content' => null,
                'answer_a' => '<b>A</b>. evaporate',
                'answer_b' => '<b>B</b>. consulate', 
                'answer_c' => '<b>C</b>. communicate',
                'answer_d' => '<b>D</b>. coordinate',
                'correct_answer' => '<b>B</b>. consulate',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //Mark the letter A, B, C, or D on your answer sheet to indicate the word or phrase CLOSEST in meaning to the underlined word(s) in each of the following questions.
            //cau5
            [
                'reading_id' => null,
                'content' => 'I\'ll take the new job whose salary is <u>fantastic</u>.',
                'answer_a' => '<b>A</b>. reasonable',
                'answer_b' => '<b>B</b>. acceptable', 
                'answer_c' => '<b>C</b>. pretty high',
                'answer_d' => '<b>D</b>. wonderful',
                'correct_answer' => '<b>D</b>. wonderful',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau6
            [
                'reading_id' => null,
                'content' => 'He was asked to <u>account for</u> his presence at the scene of crime.',
                'answer_a' => '<b>A</b>. complain',
                'answer_b' => '<b>B</b>. exchange', 
                'answer_c' => '<b>C</b>. explain',
                'answer_d' => '<b>D</b>. arrange',
                'correct_answer' => '<b>C</b>. explain',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //Mark the letter A, B, C, or D on your answer sheet to indicate the word or phrase OPPOSITE in meaning to the underlined word(s) in each of the following questions.
            //cau7
            [
                'reading_id' => null,
                'content' => 'His career in the <u>illicit</u> drug trade ended with the police raid this morning.',
                'answer_a' => '<b>A</b>. elicited',
                'answer_b' => '<b>B</b>. irregular', 
                'answer_c' => '<b>C</b>. secret',
                'answer_d' => '<b>D</b>. legal',
                'correct_answer' => '<b>D</b>. legal',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau8
            [
                'reading_id' => null,
                'content' => 'Mr. Smith\'s new neighbors appear to be very <u>friendly</u>.',
                'answer_a' => '<b>A</b>. amicable',
                'answer_b' => '<b>B</b>. inapplicable', 
                'answer_c' => '<b>C</b>. hostile',
                'answer_d' => '<b>D</b>. futile',
                'correct_answer' => '<b>C</b>. hostile',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],

            //Mark the letter A, B, C, or D on your answer sheet to indicate the underlined part that needs correction in each of the following questions.
            //cau9
            [
                'reading_id' => null,
                'content' => '<u>Japanese</u> initially <u>used</u> <u>jeweled</u> objects to <u>decorate</u> swords and ceremonial items.',
                'answer_a' => '<b>A</b>. Japanese',
                'answer_b' => '<b>B</b>. used', 
                'answer_c' => '<b>C</b>. jeweled',
                'answer_d' => '<b>D</b>. decorate',
                'correct_answer' => '<b>A</b>. Japanese',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau10
            [
                'reading_id' => null,
                'content' => '<u>Because of</u> attitudes <u>shape</u> behavior, <u>psychologists</u> want to find out how opinions are <u>formed</u>.',
                'answer_a' => '<b>A</b>. Because of',
                'answer_b' => '<b>B</b>. shape', 
                'answer_c' => '<b>C</b>. psychologists',
                'answer_d' => '<b>D</b>. are formed',
                'correct_answer' => '<b>A</b>. Because of',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau11
            [
                'reading_id' => null,
                'content' => '<u>As the roles</u> of people in society change, <u>so does</u> the <u>rules of</u> conduct in certain <u>situations</u>.',
                'answer_a' => '<b>A</b>. As the roles',
                'answer_b' => '<b>B</b>. so does', 
                'answer_c' => '<b>C</b>. rules of',
                'answer_d' => '<b>D</b>. situations',
                'correct_answer' => '<b>B</b>. so does',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],

            //Mark the letter A, B, C, or D on your answer sheet to indicate the correct answer to each of the following questions.
            //cau12
            [
                'reading_id' => null,
                'content' => '"How was your exam?" "A couple of questions were tricky, but on the _______ it was pretty easy."',
                'answer_a' => '<b>A</b>. spot',
                'answer_b' => '<b>B</b>. general', 
                'answer_c' => '<b>C</b>. hand',
                'answer_d' => '<b>D</b>. whole',
                'correct_answer' => '<b>D</b>. whole',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau13
            [
                'reading_id' => null,
                'content' => 'If you practice regularly, you can learn this language skill in short _______ of a time.',
                'answer_a' => '<b>A</b>. period',
                'answer_b' => '<b>B</b>. aspect', 
                'answer_c' => '<b>C</b>. arrangement',
                'answer_d' => '<b>D</b>. activity',
                'correct_answer' => '<b>A</b>. period',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau14
            [
                'reading_id' => null,
                'content' => 'Students can _______ a lot of information just by taking an active part in class.',
                'answer_a' => '<b>A</b>. concern',
                'answer_b' => '<b>B</b>. install', 
                'answer_c' => '<b>C</b>. appear',
                'answer_d' => '<b>D</b>. memorize',
                'correct_answer' => '<b>D</b>. memorize',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau15
            [
                'reading_id' => null,
                'content' => 'It _______ a long time since we were apart, I did not recognize her.',
                'answer_a' => '<b>A</b>. is',
                'answer_b' => '<b>B</b>. has been', 
                'answer_c' => '<b>C</b>. was',
                'answer_d' => '<b>D</b>. had been',
                'correct_answer' => '<b>B</b>. has been',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau16
            [
                'reading_id' => null,
                'content' => 'I have learned a lot about the value of labour from my _______ at home.',
                'answer_a' => '<b>A</b>. credit',
                'answer_b' => '<b>B</b>. energy', 
                'answer_c' => '<b>C</b>. chores',
                'answer_d' => '<b>D</b>. pot plants',
                'correct_answer' => '<b>C</b>. chores',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau17
            [
                'reading_id' => null,
                'content' => 'In the past people believed that women\'s _______ roles were as mothers and wives.',
                'answer_a' => '<b>A</b>. nature',
                'answer_b' => '<b>B</b>. natural', 
                'answer_c' => '<b>C</b>. naturism',
                'answer_d' => '<b>D</b>. naturalist',
                'correct_answer' => '<b>B</b>. natural',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau18
            [
                'reading_id' => null,
                'content' => 'Not until the manager got the right solution to the problem _______.',
                'answer_a' => '<b>A</b>. we must try by ourselves',
                'answer_b' => '<b>B</b>. must we try by ourselves', 
                'answer_c' => '<b>C</b>. have we to try by ourselves.',
                'answer_d' => '<b>D</b>. we must try for ourselves',
                'correct_answer' => '<b>B</b>. must we try by ourselves',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau19
            [
                'reading_id' => null,
                'content' => 'A few years ago, a fire _______ much of an overcrowded part of the city.',
                'answer_a' => '<b>A</b>. battled',
                'answer_b' => '<b>B</b>. devastated', 
                'answer_c' => '<b>C</b>. mopped',
                'answer_d' => '<b>D</b>. developed',
                'correct_answer' => '<b>B</b>. devastated',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau20
            [
                'reading_id' => null,
                'content' => 'Juliet, remember shammed death when Romeo appears, _______?',
                'answer_a' => '<b>A</b>. didn\'t she',
                'answer_b' => '<b>B</b>. doesn\'t he', 
                'answer_c' => '<b>C</b>. do you',
                'answer_d' => '<b>D</b>. will you',
                'correct_answer' => '<b>D</b>. will you',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau21
            [
                'reading_id' => null,
                'content' => 'Charles Lindbergh\'s feat put him in a position from which _______ the development of commercial aviation.',
                'answer_a' => '<b>A</b>. he could encourage',
                'answer_b' => '<b>B</b>. he encourages', 
                'answer_c' => '<b>C</b>. encouraged',
                'answer_d' => '<b>D</b>. encouragement',
                'correct_answer' => '<b>A</b>. he could encourage',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau22
            [
                'reading_id' => null,
                'content' => 'She started the course two months ago but dropped _______ after only a month.',
                'answer_a' => '<b>A</b>. in',
                'answer_b' => '<b>B</b>. back', 
                'answer_c' => '<b>C</b>. out',
                'answer_d' => '<b>D</b>. off',
                'correct_answer' => '<b>C</b>. out',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau23
            [
                'reading_id' => null,
                'content' => 'Mary eats _______ she used to.',
                'answer_a' => '<b>A</b>. fewer meat and bananas than',
                'answer_b' => '<b>B</b>. less and less meat and bananas than', 
                'answer_c' => '<b>C</b>. less meat and fewer bananas than',
                'answer_d' => '<b>D</b>. the least meat and fewest bananas than',
                'correct_answer' => '<b>C</b>. less meat and fewer bananas than',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],

            //Mark the letter A, B, C, or D on your answer sheet to indicate the most suitable response to complete the following exchanges.
            //cau24
            [
                'reading_id' => null,
                'content' => '"I have a terrible headache." <br>- " _______ "',
                'answer_a' => '<b>A</b>. Maybe I\'m not going to the doctor\'s.',
                'answer_b' => '<b>B</b>. Not very well. Thanks.', 
                'answer_c' => '<b>C</b>. Maybe you should take a rest.',
                'answer_d' => '<b>D</b>. Not bad. I\'m going to the doctor\'s.',
                'correct_answer' => '<b>C</b>. Maybe you should take a rest.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau25
            [
                'reading_id' => null,
                'content' => '"Do you want me to help you with those suitcases?" " _______ "',
                'answer_a' => '<b>A</b>. Of course, not for me.',
                'answer_b' => '<b>B</b>. No, I can\'t help you now.', 
                'answer_c' => '<b>C</b>. No, those aren\'t mine.',
                'answer_d' => '<b>D</b>. No, I can manage them myself.',
                'correct_answer' => '<b>D</b>. No, I can manage them myself.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],

            //Mark the letter A, B, C, or D on your answer sheet to indicate the sentence that is closest in meaning to each of the following sentences.
            //cau26
            [
                'reading_id' => null,
                'content' => 'I don\'t agree with prohibiting smoking in bars.',
                'answer_a' => '<b>A</b>. I\'m not in favor of prohibiting smoking in bars.',
                'answer_b' => '<b>B</b>. I\'m not in favor to prohibiting smoking in bars.', 
                'answer_c' => '<b>C</b>. I\'m not favor with prohibiting smoking in bars.',
                'answer_d' => '<b>D</b>. I\'m not doing a favor to prohibiting smoking in bars.',
                'correct_answer' => '<b>A</b>. I\'m not in favor of prohibiting smoking in bars.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau27
            [
                'reading_id' => null,
                'content' => 'She has always had a good relationship with the children.',
                'answer_a' => '<b>A</b>. She has got a lot of children and relatives who she always gets along with.',
                'answer_b' => '<b>B</b>. She always gets along well with the children.', 
                'answer_c' => '<b>C</b>. The children have had her as their friends and relatives.',
                'answer_d' => '<b>D</b>. She has always got on well with the children.',
                'correct_answer' => '<b>D</b>. She has always got on well with the children.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau28
            [
                'reading_id' => null,
                'content' => 'But for his father\'s early retirement, Peter would not have taken over the family business.',
                'answer_a' => '<b>A</b>. His father retired early, but Peter still ran the family business.',
                'answer_b' => '<b>B</b>. Peter\'s father didn\'t want him to take over the family business despite his retirement.', 
                'answer_c' => '<b>C</b>. Peter only took over the family business because his father decided to retire early.',
                'answer_d' => '<b>D</b>. Peter didn\'t take over the family business because his father didn\'t retire.',
                'correct_answer' => '<b>C</b>. Peter only took over the family business because his father decided to retire early.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],

            //Mark the letter A, B, C, or D on your answer sheet to indicate the sentence that best combines each pair of sentences in the following questions.
            //cau29
            [
                'reading_id' => null,
                'content' => 'He is very intelligent. He can solve all problems in no time.',
                'answer_a' => '<b>A</b>. So intelligent is he that he can solve all problems in no time.',
                'answer_b' => '<b>B</b>. He is very intelligent that he can solve all problems in no time.', 
                'answer_c' => '<b>C</b>. An intelligent student is he that he can solve all problems in no time.',
                'answer_d' => '<b>D</b>. So intelligent a student is he that he can solve all problems in no time.',
                'correct_answer' => '<b>A</b>. So intelligent is he that he can solve all problems in no time.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau30
            [
                'reading_id' => null,
                'content' => 'We cut down many forests. The Earth becomes hot.',
                'answer_a' => '<b>A</b>. The more forests we cut down, the hotter the Earth becomes.',
                'answer_b' => '<b>B</b>. The more we cut down forests, the hotter the Earth becomes.', 
                'answer_c' => '<b>C</b>. The more forests we cut down, the Earth becomes hotter.',
                'answer_d' => '<b>D</b>. The more we cut down forests, the Earth becomes hotter.',
                'correct_answer' => '<b>A</b>. The more forests we cut down, the hotter the Earth becomes.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //Reading 31 -> 35.
            //cau31
            [
                'reading_id' => 10,
                'content' => null,
                'answer_a' => '<b>A</b>. bear',
                'answer_b' => '<b>B</b>. decide', 
                'answer_c' => '<b>C</b>. hope',
                'answer_d' => '<b>D</b>. expect',
                'correct_answer' => '<b>A</b>. bear',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau32
            [
                'reading_id' => 10,
                'content' => null,
                'answer_a' => '<b>A</b>. made',
                'answer_b' => '<b>B</b>. cut', 
                'answer_c' => '<b>C</b>. brought',
                'answer_d' => '<b>D</b>. born',
                'correct_answer' => '<b>B</b>. cut',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau33
            [
                'reading_id' => 10,
                'content' => null,
                'answer_a' => '<b>A</b>. In addition',
                'answer_b' => '<b>B</b>. In practice', 
                'answer_c' => '<b>C</b>. In order',
                'answer_d' => '<b>D</b>. In contrast',
                'correct_answer' => '<b>B</b>. In contrast',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau34
            [
                'reading_id' => 10,
                'content' => null,
                'answer_a' => '<b>A</b>. way',
                'answer_b' => '<b>B</b>. matter', 
                'answer_c' => '<b>C</b>. surprise',
                'answer_d' => '<b>D</b>. exception',
                'correct_answer' => '<b>B</b>. matter',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau35
            [
                'reading_id' => 10,
                'content' => null,
                'answer_a' => '<b>A</b>. little',
                'answer_b' => '<b>B</b>. no', 
                'answer_c' => '<b>C</b>. lots',
                'answer_d' => '<b>D</b>. plenty of',
                'correct_answer' => '<b>D</b>. plenty of',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],

            //Reading 36 -> 42.
            //cau36
            [
                'reading_id' => 11,
                'content' => 'The main subject of the passage is _______ .',
                'answer_a' => '<b>A</b>. Melville\'s travels',
                'answer_b' => '<b>B</b>. Melville\'s personal background', 
                'answer_c' => '<b>C</b>. the popularity of Melville\'s novels',
                'answer_d' => '<b>D</b>. Moby Dick',
                'correct_answer' => '<b>C</b>. the popularity of Melville\'s novels',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau37
            [
                'reading_id' => 11,
                'content' => 'In what year did Melville\'s book about his experiences as a cabin boy appear?',
                'answer_a' => '<b>A</b>. 1837',
                'answer_b' => '<b>B</b>. 1841', 
                'answer_c' => '<b>C</b>. 1849',
                'answer_d' => '<b>D</b>. 1847',
                'correct_answer' => '<b>C</b>. 1849',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau38
            [
                'reading_id' => 11,
                'content' => 'The word <u>"basis"</u> is closest in meaning to _______.',
                'answer_a' => '<b>A</b>. foundation',
                'answer_b' => '<b>B</b>. message', 
                'answer_c' => '<b>C</b>. bottom',
                'answer_d' => '<b>D</b>. theme',
                'correct_answer' => '<b>A</b>. foundation',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau39
            [
                'reading_id' => 11,
                'content' => 'The passage implies that Melville stayed in Tahiti because _______.',
                'answer_a' => '<b>A</b>. he had unofficially left his ship.',
                'answer_b' => '<b>B</b>. he was on leave while his ship was in port.', 
                'answer_c' => '<b>C</b>. he had finished his term of duty.',
                'answer_d' => '<b>D</b>. he had received permission to take a vacation in Tahiti.',
                'correct_answer' => '<b>A</b>. he had unofficially left his ship.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau40
            [
                'reading_id' => 11,
                'content' => 'How did the publication of Moby Dick affect Melville\'s popularity?',
                'answer_a' => '<b>A</b>. His popularity increased immediately,',
                'answer_b' => '<b>B</b>. It had no effect on his popularity.', 
                'answer_c' => '<b>C</b>. It caused his popularity to decrease.',
                'answer_d' => '<b>D</b>. His popularity remained as strong as ever.',
                'correct_answer' => '<b>C</b>. It caused his popularity to decrease.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau41
            [
                'reading_id' => 11,
                'content' => 'According to the passage, Moby Dick is _______ .',
                'answer_a' => '<b>A</b>. a romantic adventure',
                'answer_b' => '<b>B</b>. a single-faceted work', 
                'answer_c' => '<b>C</b>. a short story about a whale',
                'answer_d' => '<b>D</b>. symbolic of humanity fighting the environment',
                'correct_answer' => '<b>D</b>. symbolic of humanity fighting the environment',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau42
            [
                'reading_id' => 11,
                'content' => 'The word <u>"metamorphosis"</u> is closest in meaning to _______.',
                'answer_a' => '<b>A</b>. change',
                'answer_b' => '<b>B</b>. circle', 
                'answer_c' => '<b>C</b>. mysticism',
                'answer_d' => '<b>D</b>. descent',
                'correct_answer' => '<b>A</b>. change',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //Reading 43 -> 50.
            //cau43
            [
                'reading_id' => 12,
                'content' => 'What is the main topic of the passage?',
                'answer_a' => '<b>A</b>. The agricultural activities of a North American Society',
                'answer_b' => '<b>B</b>. Various ways corn can be used', 
                'answer_c' => '<b>C</b>. The problems encountered by farmers specializing in growing once crop',
                'answer_d' => '<b>D</b>. Weather conditions on the western plains.',
                'correct_answer' => '<b>A</b>. The agricultural activities of a North American Society',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau44
            [
                'reading_id' => 12,
                'content' => 'The Mandans built their houses close together in order to _______.',
                'answer_a' => '<b>A</b>. guard their supplies of food',
                'answer_b' => '<b>B</b>. protect themselves against the weather', 
                'answer_c' => '<b>C</b>. allow more room for growing corn',
                'answer_d' => '<b>D</b>. share farming implements',
                'correct_answer' => '<b>A</b>. guard their supplies of food',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau45
            [
                'reading_id' => 12,
                'content' => 'Why does the author believe that the Mandans were skilled farmers?',
                'answer_a' => '<b>A</b>. They developed effective fertilizers.',
                'answer_b' => '<b>B</b>. They developed new varieties of corn.', 
                'answer_c' => '<b>C</b>. They could grow crops despite adverse weather.',
                'answer_d' => '<b>D</b>. They could grow crops in most types of soil.',
                'correct_answer' => '<b>C</b>. They could grow crops despite adverse weather.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau46
            [
                'reading_id' => 12,
                'content' => 'The word <b>"consumption"</b> in the 4th paragraph is closest in meaning to _______.',
                'answer_a' => '<b>A</b>. decay',
                'answer_b' => '<b>B</b>. planting', 
                'answer_c' => '<b>C</b>. eating',
                'answer_d' => '<b>D</b>. conversation',
                'correct_answer' => '<b>C</b>. eating',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau47
            [
                'reading_id' => 12,
                'content' => 'Which of the following processes does the author imply was done by both men and women?',
                'answer_a' => '<b>A</b>. Clearing fields',
                'answer_b' => '<b>B</b>. Planting corn', 
                'answer_c' => '<b>C</b>. Harvesting corn',
                'answer_d' => '<b>D</b>. Harvesting squash',
                'correct_answer' => '<b>C</b>. Harvesting corn',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau48
            [
                'reading_id' => 12,
                'content' => 'The word <b>"them"</b> in the last paragraph refers to _______.',
                'answer_a' => '<b>A</b>. women',
                'answer_b' => '<b>B</b>. seeds', 
                'answer_c' => '<b>C</b>. slices',
                'answer_d' => '<b>D</b>. the Mandans',
                'correct_answer' => '<b>C</b>. slices',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau49
            [
                'reading_id' => 12,
                'content' => 'Which of the following crops was cultivated primarily by men?',
                'answer_a' => '<b>A</b>. Squash',
                'answer_b' => '<b>B</b>. Sunflower', 
                'answer_c' => '<b>C</b>. Corn',
                'answer_d' => '<b>D</b>. Tobacco',
                'correct_answer' => '<b>D</b>. Tobacco',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau50
            [
                'reading_id' => 12,
                'content' => 'Throughout the passage, the author implies that the Mandans _______.',
                'answer_a' => '<b>A</b>. planned for the future',
                'answer_b' => '<b>B</b>. valued individuality', 
                'answer_c' => '<b>C</b>. were open to strangers',
                'answer_d' => '<b>D</b>. were very adventurous',
                'correct_answer' => '<b>A</b>. planned for the future',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            // de thi chinh thuc 2019
            //stress
            [
                'reading_test_id' => null,
                'content' => null,
                'answer_a' => '<b>A</b>. consist',
                'answer_b' => '<b>B</b>. carry',
                'answer_c' => '<b>C</b>. remove',
                'answer_d' => '<b>D</b>. protect',
                'correct_answer' => '<b>B</b>. carry',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => null,
                'content' => null,
                'answer_a' => '<b>A</b>. solution',
                'answer_b' => '<b>B</b>. principal',
                'answer_c' => '<b>C</b>. passenger',
                'answer_d' => '<b>D</b>. continent',
                'correct_answer' => '<b>A</b>. solution',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            //pronun
            [
                'reading_test_id' => null,
                'content' => null,
                'answer_a' => '<b>A</b>. t<u>ou</u>ch',
                'answer_b' => '<b>B</b>. r<u>ou</u>nd',
                'answer_c' => '<b>C</b>. gr<u>ou</u>nd',
                'answer_d' => '<b>D</b>. sh<u>ou</u>t',
                'correct_answer' => '<b>A</b>. t<u>ou</u>ch',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => null,
                'content' => null,
                'answer_a' => '<b>A</b>. combin<u>ed</u>',
                'answer_b' => '<b>B</b>. travell<u>ed</u>',
                'answer_c' => '<b>C</b>. behav<u>ed</u>',
                'answer_d' => '<b>D</b>. practis<u>ed</u>',
                'correct_answer' => '<b>D</b>. practis<u>ed</u>',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            //complete
            [
                'reading_test_id' => null,
                'content' => 'A shop assistant is talking to a customer.<br> - Shop assistant:"Do you need anything else?" <br> - Customer:"____"',
                'answer_a' => '<b>A</b>. Good job!',
                'answer_b' => '<b>B</b>. That\'s all. Thanks.',
                'answer_c' => '<b>C</b>. With pleasure',
                'answer_d' => '<b>D</b>. You\'re welcome.',
                'correct_answer' => '<b>B</b>. That\'s all. Thanks.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => null,
                'content' => 'Ann and Peter are talking about homework.<br> - Ann:"I think children should be paid for doing homework."<br> - Peter:"____. It\'s their duty in the family."',
                'answer_a' => '<b>A</b>. You\'re exactly right',
                'answer_b' => '<b>B</b>. That\'s what I think',
                'answer_c' => '<b>C</b>. There\'s no doubt about it',
                'answer_d' => '<b>D</b>. I don\'t think so',
                'correct_answer' => '<b>D</b>. I don\'t think so',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            //closest meaning
            [
                'reading_test_id' => null,
                'content' => 'These photos <b><u>brought back</u><b> many sweet memories of our trip to Ha Noi last year.',
                'answer_a' => '<b>A</b>. recalled',
                'answer_b' => '<b>B</b>. released',
                'answer_c' => '<b>C</b>. revised',
                'answer_d' => '<b>D</b>. caught',
                'correct_answer' => '<b>A</b>. recalled',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => null,
                'content' => 'At first, John said he hadn\'t broken the vase, but later he <b><u>accepted</u></b> it.',
                'answer_a' => '<b>A</b>. denied',
                'answer_b' => '<b>B</b>. discussed',
                'answer_c' => '<b>C</b>. protected',
                'answer_d' => '<b>D</b>. admitted',
                'correct_answer' => '<b>D</b>. admitted',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            //opposite
            [
                'reading_test_id' => null,
                'content' => 'Children brought up in a <b><u>caring</u></b> environment tend to grow more sympathetic towards others.',
                'answer_a' => '<b>A</b>. loving',
                'answer_b' => '<b>B</b>. dishonest',
                'answer_c' => '<b>C</b>. healthy',
                'answer_d' => '<b>D</b>. hateful',
                'correct_answer' => '<b>D</b>. hateful',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => null,
                'content' => 'It\'s quite dissapointing that some people still <b><u>turn a blind eye</u></b> to acts of injustice they witness in the street.',
                'answer_a' => '<b>A</b>. take no notice of',
                'answer_b' => '<b>B</b>. have no feeling for',
                'answer_c' => '<b>C</b>. show respect for',
                'answer_d' => '<b>D</b>. pay attention to',
                'correct_answer' => '<b>D</b>. pay attention to',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            //correct
            [
                'reading_test_id' => null,
                'content' => 'As they remembered ____ about the danger of getting lost in the forest, the tourists closely followed the tour guide.',
                'answer_a' => '<b>A</b>. being warned',
                'answer_b' => '<b>B</b>. warning',
                'answer_c' => '<b>C</b>. to be warned',
                'answer_d' => '<b>D</b>. to warn',
                'correct_answer' => '<b>A</b>. being warned',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => null,
                'content' => 'Once ___ for viruses, the software can be installed in the school computer system for use.',
                'answer_a' => '<b>A</b>. has tested',
                'answer_b' => '<b>B</b>. is tested',
                'answer_c' => '<b>C</b>. testing',
                'answer_d' => '<b>D</b>. tested',
                'correct_answer' => '<b>D</b>. tested',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => null,
                'content' => 'The teacher entered the room while the students ____ their plan for the excursion.',
                'answer_a' => '<b>A</b>. discuss',
                'answer_b' => '<b>B</b>. were discussing',
                'answer_c' => '<b>C</b>. discussed',
                'answer_d' => '<b>D</b>. are discussing',
                'correct_answer' => '<b>B</b>. were discussing',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => null,
                'content' => 'His choice of future career is quite similar ____ mine.',
                'answer_a' => '<b>A</b>. with',
                'answer_b' => '<b>B</b>. at',
                'answer_c' => '<b>C</b>. for',
                'answer_d' => '<b>D</b>. to',
                'correct_answer' => '<b>D</b>. to',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => null,
                'content' => 'With his good sense of humour, Martin is quite ____ with the students.',
                'answer_a' => '<b>A</b>. popularity',
                'answer_b' => '<b>B</b>. popular',
                'answer_c' => '<b>C</b>. popularise',
                'answer_d' => '<b>D</b>. popularly',
                'correct_answer' => '<b>B</b>. popular',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => null,
                'content' => 'The residents of the village are living a happy life ____ they lack modern facilities,',
                'answer_a' => '<b>A</b>. because of',
                'answer_b' => '<b>B</b>. although',
                'answer_c' => '<b>C</b>. therefore',
                'answer_d' => '<b>D</b>. despite',
                'correct_answer' => '<b>B</b>. although',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => null,
                'content' => 'Action films with big stars tend to ____ great public attention.',
                'answer_a' => '<b>A</b>. achieve',
                'answer_b' => '<b>B</b>. show',
                'answer_c' => '<b>C</b>. attract',
                'answer_d' => '<b>D</b>. reach',
                'correct_answer' => '<b>C</b>. attract',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => null,
                'content' => 'This is ____ most beatiful song I\'ve ever listened to.',
                'answer_a' => '<b>A</b>. an',
                'answer_b' => '<b>B</b>. a',
                'answer_c' => '<b>C</b>. the',
                'answer_d' => '<b>D</b>. Ø',
                'correct_answer' => '<b>C</b>. the',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => null,
                'content' => 'The scientists are working on a drug capable of ____ the spreads of cancerous cells.',
                'answer_a' => '<b>A</b>. arresting',
                'answer_b' => '<b>B</b>. catching',
                'answer_c' => '<b>C</b>. seizing',
                'answer_d' => '<b>D</b>. grasping',
                'correct_answer' => '<b>C</b>. seizing',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => null,
                'content' => 'The little boy took an instant liking to his babysister ____.',
                'answer_a' => '<b>A</b>. upon their first meeting',
                'answer_b' => '<b>B</b>. before he first met her',
                'answer_c' => '<b>C</b>. prior to their first meeting',
                'answer_d' => '<b>D</b>. as soon as he meets her',
                'correct_answer' => '<b>A</b>. upon their first meeting',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => null,
                'content' => 'It\'s time he acted like a ____ adult and stopped blaming others for his wrongdoings.',
                'answer_a' => '<b>A</b>. responsible',
                'answer_b' => '<b>B</b>. sociable',
                'answer_c' => '<b>C</b>. believable',
                'answer_d' => '<b>D</b>. suitable',
                'correct_answer' => '<b>A</b>. responsible',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => null,
                'content' => 'We ___ on a field trip if the weather is fine this weekend',
                'answer_a' => '<b>A</b>. could have gone',
                'answer_b' => '<b>B</b>. will go',
                'answer_c' => '<b>C</b>. would go',
                'answer_d' => '<b>D</b>. went',
                'correct_answer' => '<b>B</b>. will go',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => null,
                'content' => 'One recipe for success is to stay focused and ___ yourself to whatever you do.',
                'answer_a' => '<b>A</b>. apply',
                'answer_b' => '<b>B</b>. attach',
                'answer_c' => '<b>C</b>. assign',
                'answer_d' => '<b>D</b>. adhere',
                'correct_answer' => '<b>A</b>. apply',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => null,
                'content' => 'It\'s not my ____ to tell you how to run your life, but I think you should settle down and have a family.',
                'answer_a' => '<b>A</b>. work',
                'answer_b' => '<b>B</b>. chore',
                'answer_c' => '<b>C</b>. job',
                'answer_d' => '<b>D</b>. career',
                'correct_answer' => '<b>C</b>. job',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            //reading
            [
                'reading_test_id' => 4,
                'content' => null,
                'answer_a' => '<b>A</b>. resemblance',
                'answer_b' => '<b>B</b>. relevance',
                'answer_c' => '<b>C</b>. acquaintance',
                'answer_d' => '<b>D</b>. acceptance',
                'correct_answer' => '<b>B</b>. relevance',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => 4,
                'content' => null,
                'answer_a' => '<b>A</b>. habitual',
                'answer_b' => '<b>B</b>. spiritual',
                'answer_c' => '<b>C</b>. perceptive',
                'answer_d' => '<b>D</b>. instinctive',
                'correct_answer' => '<b>D</b>. instinctive',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => 4,
                'content' => null,
                'answer_a' => '<b>A</b>. successfully',
                'answer_b' => '<b>B</b>. successful',
                'answer_c' => '<b>C</b>. succeed',
                'answer_d' => '<b>D</b>. success',
                'correct_answer' => '<b>D</b>. success',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => 4,
                'content' => null,
                'answer_a' => '<b>A</b>. who',
                'answer_b' => '<b>B</b>. why',
                'answer_c' => '<b>C</b>. where',
                'answer_d' => '<b>D</b>. which',
                'correct_answer' => '<b>A</b>. who',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => 4,
                'content' => null,
                'answer_a' => '<b>A</b>. as a result',
                'answer_b' => '<b>B</b>. in contrast',
                'answer_c' => '<b>C</b>. though',
                'answer_d' => '<b>D</b>. because',
                'correct_answer' => '<b>A</b>. as a result',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            //reading
            [
                'reading_test_id' => 5,
                'content' => 'Which best serves as the title of the passage?',
                'answer_a' => '<b>A</b>. An Old Tourist Destination',
                'answer_b' => '<b>B</b>. Holidays with a difference',
                'answer_c' => '<b>C</b>. Different Customs of a Tribe',
                'answer_d' => '<b>D</b>. Peak Holiday Seasons',
                'correct_answer' => '<b>B</b>. Holidays with a difference',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => 5,
                'content' => 'The word <b><u>"They"</u></b> in paragraph 1 refers to ____.',
                'answer_a' => '<b>A</b>. travellers',
                'answer_b' => '<b>B</b>. facilities',
                'answer_c' => '<b>C</b>. local people',
                'answer_d' => '<b>D</b>. remote destinations',
                'correct_answer' => '<b>A</b>. travellers',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => 5,
                'content' => 'According to paragraph 2, what is the main attraction of tribal tourism?',
                'answer_a' => '<b>A</b>. Tourists can stay with people of the same values.',
                'answer_b' => '<b>B</b>. Tourists can interact with other foreign visitors.',
                'answer_c' => '<b>C</b>. Tourists can experience a different lifestyle.',
                'answer_d' => '<b>D</b>. Tourists can explore beaty spots in remote areas.',
                'correct_answer' => '<b>C</b>. Tourists can experience a different lifestyle.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => 5,
                'content' => 'The word <b><u>"divived"</u></b> in paragraph 3 is closest in meaning to ____.',
                'answer_a' => '<b>A</b>. similar',
                'answer_b' => '<b>B</b>. important',
                'answer_c' => '<b>C</b>. different',
                'answer_d' => '<b>D</b>. interesting',
                'correct_answer' => '<b>C</b>. different',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => 5,
                'content' => 'According to Hilary Waterhouse, the most important thing for a tribal tourist is to ____.',
                'answer_a' => '<b>A</b>. forget about negative experiences',
                'answer_b' => '<b>B</b>. respect local customs and traditions',
                'answer_c' => '<b>C</b>. learn about other guests',
                'answer_d' => '<b>D</b>. be accompanied by other travellers',
                'correct_answer' => '<b>B</b>. respect local customs and traditions',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => 6,
                'content' => 'Which best serves as the title for the passage?',
                'answer_a' => '<b>A</b>. Waste Recycling: A Storm in a Teacup',
                'answer_b' => '<b>B</b>. Domestic Recycling: Pros and Cons',
                'answer_c' => '<b>C</b>. E-waste - An Export Commodity of the Future',
                'answer_d' => '<b>D</b>. E-waste - A Mess to Clear up',
                'correct_answer' => '<b>A</b>. Waste Recycling: A Storm in a Teacup',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => 6,
                'content' => 'The word <b><u>"obsolete"</u></b> in paragraph 1 is closest meaning to ____.',
                'answer_a' => '<b>A</b>. outdated',
                'answer_b' => '<b>B</b>. inaccurate',
                'answer_c' => '<b>C</b>. broken',
                'answer_d' => '<b>D</b>. incomplete',
                'correct_answer' => '<b>A</b>. outdated',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => 6,
                'content' => 'As stated in paragraph 2, a large percentage of e-waste meant for recycling in developed countries ____.',
                'answer_a' => '<b>A</b>. is burried deep in the soil at landfills',
                'answer_b' => '<b>B</b>. contains all valuable metals except gold',
                'answer_c' => '<b>C</b>. is later recycled in local factories',
                'answer_d' => '<b>D</b>. is eventually sent to developing nations',
                'correct_answer' => '<b>D</b>. is eventually sent to developing nations',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => 6,
                'content' => 'The word <b><u>"notify"</u></b> in paragraph 3 is closest meaning to ____.',
                'answer_a' => '<b>A</b>. assure',
                'answer_b' => '<b>B</b>. notice',
                'answer_c' => '<b>C</b>. excuse',
                'answer_d' => '<b>D</b>. inform',
                'correct_answer' => '<b>D</b>. inform',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => 6,
                'content' => 'The word <b><u>"it"</u></b> in paragraph 3 refers to ____.',
                'answer_a' => '<b>A</b>. the ban',
                'answer_b' => '<b>B</b>. recycling infrastructure',
                'answer_c' => '<b>C</b>. the European Union',
                'answer_d' => '<b>D</b>. the Basel Convention',
                'correct_answer' => '<b>A</b>. the ban',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => 6,
                'content' => 'According to the European Union\'s laws, electronics manufacturers are required to ____.',
                'answer_a' => '<b>A</b>. upgrade their recycling infrastructure regularly',
                'answer_b' => '<b>B</b>. sell their e-waste to developed nations only',
                'answer_c' => '<b>C</b>. sign the Basel Convention',
                'answer_d' => '<b>D</b>. take responsibility for disposing of their products safely',
                'correct_answer' => '<b>D</b>. take responsibility for disposing of their products safely',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => 6,
                'content' => 'Which of the following statement is TRUE, according to the passage?',
                'answer_a' => '<b>A</b>. The USA\'s total e-waste output amounts to 70.000 tons per year.',
                'answer_b' => '<b>B</b>. Creative Recycling Systems has made a fortune from their recycling machine.',
                'answer_c' => '<b>C</b>. The Basel Convention originally banned the import of high-tech trash into European countries.',
                'answer_d' => '<b>D</b>. Shipping e-waste abroad yields greater profit than recycling it safely in the USA.',
                'correct_answer' => '<b>D</b>. Shipping e-waste abroad yields greater profit than recycling it safely in the USA.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => 6,
                'content' => 'Which of the following can be inferred from the passage?',
                'answer_a' => '<b>A</b>. Most countries have made enormous efforts to manage their e-waste exports.',
                'answer_b' => '<b>B</b>. legislative action is fundamental to solving the problem of e-waste effectively.',
                'answer_c' => '<b>C</b>. Strict laws against sending e-waste abroad have recently been upheld in Florida.',
                'answer_d' => '<b>D</b>. Developing nations benefit more from the trade in e-waste than their developed counterparts.',
                'correct_answer' => '<b>B</b>. legislative action is fundamental to solving the problem of e-waste effectively.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            //combines
            [
                'reading_test_id' => null,
                'content' => 'Peter moved abroad for a fresh start. He regrets it now.',
                'answer_a' => '<b>A</b>. If only Peter had move abroad for a fresh start.',
                'answer_b' => '<b>B</b>. Peter wishes he hadn\'t moved abroad for a fresh start.',
                'answer_c' => '<b>C</b>. If Peter moved abroad for a fresh start, he would regret it.',
                'answer_d' => '<b>D</b>. Peter regrets not having moved abroad for a fresh start.',
                'correct_answer' => '<b>B</b>. Peter wishes he hadn\'t moved abroad for a fresh start.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => null,
                'content' => 'Smartphones are becoming reasonably priced. New applications make them more appealing.',
                'answer_a' => '<b>A</b>. Appealing though smarphones are with new applications, they are becoming less affordably priced.',
                'answer_b' => '<b>B</b>. Whatever new applications smartphones have, they are becoming more appealing with reasonable prices.',
                'answer_c' => '<b>C</b>. No matter how reasonable the prices of smartphones are, they are not so appealing with new applications.',
                'answer_d' => '<b>D</b>. Not only are smartphones becoming more affordable but, with new applications, they are also more appealing.',
                'correct_answer' => '<b>D</b>. Not only are smartphones becoming more affordable but, with new applications, they are also more appealing.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            // sentence closest in meaning
            [
                'reading_test_id' => null,
                'content' => 'It was wrong of you to criticise your son in front of his friends.',
                'answer_a' => '<b>A</b>. You shouldn\'t have criticised your son in front of his friends.',
                'answer_b' => '<b>B</b>. You must have criticised your son in front of his friends.',
                'answer_c' => '<b>C</b>. You mightn\'t have criticised your son in front of his friends.',
                'answer_d' => '<b>D</b>. You could have criticised your son in front of his friends.',
                'correct_answer' => '<b>A</b>. You shouldn\'t have criticised your son in front of his friends.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => null,
                'content' => 'My father likes reading newspapers more than watching TV.',
                'answer_a' => '<b>A</b>. My father doesn\'t like watching TV as much as reading newspapers.',
                'answer_b' => '<b>B</b>. My father likes watching TV more than reading newspapers.',
                'answer_c' => '<b>C</b>. My father doesn\'t like reading newspapers as much as watching TV.',
                'answer_d' => '<b>D</b>. My father likes watching TV as much as reading newspapers.',
                'correct_answer' => '<b>A</b>. My father doesn\'t like watching TV as much as reading newspapers.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => null,
                'content' => '"How long have you lived here, Lucy?" asked Jack.',
                'answer_a' => '<b>A</b>. Jack asked Lucy how long did she live here.',
                'answer_b' => '<b>B</b>. Jack asked Lucy how long she had lived there.',
                'answer_c' => '<b>C</b>. Jack asked Lucy how long she lived here.',
                'answer_d' => '<b>D</b>. Jack asked Lucy how long had she lived there.',
                'correct_answer' => '<b>B</b>. Jack asked Lucy how long she had lived there.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            //correction
            [
                'reading_test_id' => null,
                'content' => 'At the beginning of <b>the ceremony</b>, there was a <b>respectable</b> one-minute silence <b>in remembrance of</b> the victims of the <b>earthquake</b>',
                'answer_a' => '<b>A</b>. the ceremony',
                'answer_b' => '<b>B</b>. respectable',
                'answer_c' => '<b>C</b>. in remembrance of',
                'answer_d' => '<b>D</b>. earthquake',
                'correct_answer' => '<b>C</b>. in remembrance of',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => null,
                'content' => 'My mother <b>gets up usually</b> early <b>to prepare</b> breakfast <b>for</b> the <b>whole</b> family',
                'answer_a' => '<b>A</b>. gets up usually',
                'answer_b' => '<b>B</b>. to prepare',
                'answer_c' => '<b>C</b>. for',
                'answer_d' => '<b>D</b>. whole',
                'correct_answer' => '<b>A</b>. gets up usually',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            [
                'reading_test_id' => null,
                'content' => 'The money raised in <b>the</b> appeal <b>will use</b> to <b>help</b> those in need in remote <b>areas</b>.',
                'answer_a' => '<b>A</b>. the',
                'answer_b' => '<b>B</b>. will use',
                'answer_c' => '<b>C</b>. help',
                'answer_d' => '<b>D</b>. areas',
                'correct_answer' => '<b>C</b>. help',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now() 
            ],
            // de thi thu 2019 de 1
            //Mark the letter A, B, C, or D on your answer sheet to indicate the correct answer to each of the following questions.
            //cau1
            [
                'reading_id' => null,
                'content' => 'Why are you still here? You ______________ been helping Dianne in the yard.',
                'answer_a' => '<b>A</b>. must have',
                'answer_b' => '<b>B</b>. would have', 
                'answer_c' => '<b>C</b>. might have',
                'answer_d' => '<b>D</b>. should have',
                'correct_answer' => '<b>D</b>. should have',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau2
            [
                'reading_id' => null,
                'content' => 'It\'s recommended that he _________ this course.',
                'answer_a' => '<b>A</b>. took',
                'answer_b' => '<b>B</b>. take', 
                'answer_c' => '<b>C</b>. taking',
                'answer_d' => '<b>D</b>. takes',
                'correct_answer' => '<b>B</b>. take',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau3
            [
                'reading_id' => null,
                'content' => 'It is widely believed that ________ human beings are descended from one common ancestor.',
                'answer_a' => '<b>A</b>. every',
                'answer_b' => '<b>B</b>. all of', 
                'answer_c' => '<b>C</b>. every of',
                'answer_d' => '<b>D</b>. all',
                'correct_answer' => '<b>D</b>. all',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau4
            [
                'reading_id' => null,
                'content' => 'Please cut my hair __________ the style in this magazine.',
                'answer_a' => '<b>A</b>. the same long as',
                'answer_b' => '<b>B</b>. the same length as', 
                'answer_c' => '<b>C</b>. the same long like',
                'answer_d' => '<b>D</b>. the same length like',
                'correct_answer' => '<b>B</b>. the same length as',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau5
            [
                'reading_id' => null,
                'content' => 'On being told about her sack, ____________.',
                'answer_a' => '<b>A</b>. her boss felt sorry for Mary',
                'answer_b' => '<b>B</b>. it made her boss upset', 
                'answer_c' => '<b>C</b>. Mary was shocking',
                'answer_d' => '<b>D</b>. Mary felt shocked',
                'correct_answer' => '<b>D</b>. Mary felt shocked',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau6
            [
                'reading_id' => null,
                'content' => 'Everyone thinks that the concert last night was extremely successful, ________?',
                'answer_a' => '<b>A</b>. wasn\'t it',
                'answer_b' => '<b>B</b>. doesn\'t he', 
                'answer_c' => '<b>C</b>. was it',
                'answer_d' => '<b>D</b>. don\'t they',
                'correct_answer' => '<b>D</b>. don\'t they',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau7
            [
                'reading_id' => null,
                'content' => 'Nearly all of the reporters ________ the press conference had questions _______.',
                'answer_a' => '<b>A</b>. attend – asked',
                'answer_b' => '<b>B</b>. attended - to ask', 
                'answer_c' => '<b>C</b>. would attend - to be asked',
                'answer_d' => '<b>D</b>. attending - to ask',
                'correct_answer' => '<b>D</b>. attending - to ask',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau8
            [
                'reading_id' => null,
                'content' => 'Mr. Smith is a(n) ________ person. If he says he will do something, you know that he will do it.',
                'answer_a' => '<b>A</b>. dependable',
                'answer_b' => '<b>B</b>. independent', 
                'answer_c' => '<b>C</b>. depending',
                'answer_d' => '<b>D</b>. dependant',
                'correct_answer' => '<b>A</b>. dependable',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau9
            [
                'reading_id' => null,
                'content' => 'The bicycle has two wheels. One wheel is front of ___________ .',
                'answer_a' => '<b>A</b>. others',
                'answer_b' => '<b>B</b>. another', 
                'answer_c' => '<b>C</b>. other',
                'answer_d' => '<b>D</b>. the other',
                'correct_answer' => '<b>D</b>. the other',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau10
            [
                'reading_id' => null,
                'content' => 'There is no danger in using this machine as long as you _________ to the safety regulations.',
                'answer_a' => '<b>A</b>. comply',
                'answer_b' => '<b>B</b>. adhere', 
                'answer_c' => '<b>C</b>. abide',
                'answer_d' => '<b>D</b>. observe',
                'correct_answer' => '<b>B</b>. adhere',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau11
            [
                'reading_id' => null,
                'content' => 'As soon as she came _________ after the operation, she asked for a cup of water.',
                'answer_a' => '<b>A</b>. up',
                'answer_b' => '<b>B</b>. across', 
                'answer_c' => '<b>C</b>. round',
                'answer_d' => '<b>D</b>. along',
                'correct_answer' => '<b>C</b>. round',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau12
            [
                'reading_id' => null,
                'content' => 'I won\'t change my mind ____________ what you say.',
                'answer_a' => '<b>A</b>. whether',
                'answer_b' => '<b>B</b>. although', 
                'answer_c' => '<b>C</b>. no matter',
                'answer_d' => '<b>D</b>. because',
                'correct_answer' => '<b>C</b>. no matter',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau13
            [
                'reading_id' => null,
                'content' => 'We were quite impressed by the _________ students who came up with the answers to our questions almost instantly.',
                'answer_a' => '<b>A</b>. quick-witted',
                'answer_b' => '<b>B</b>. big-headed', 
                'answer_c' => '<b>C</b>. absent-minded',
                'answer_d' => '<b>D</b>. bad-tempered',
                'correct_answer' => '<b>A</b>. quick-witted',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau14
            [
                'reading_id' => null,
                'content' => 'Judging from Susana\'s reactions, I\'m not sure how much of the professor\'s explanation she ____________ .',
                'answer_a' => '<b>A</b>. put through',
                'answer_b' => '<b>B</b>. got across', 
                'answer_c' => '<b>C</b>. took in',
                'answer_d' => '<b>D</b>. brought up',
                'correct_answer' => '<b>C</b>. took in',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //Mark the letter A, B, C, or D on your answer sheet to indicate the underlined part that needs correction in each of the following questions.
            //cau15
            [
                'reading_id' => null,
                'content' => 'Many environmentalists think <u>that it is</u> just as important <u>to use</u> existing energy resources efficiently <u>than</u> it is to develop pollution free means <u>of generating</u> energy.',
                'answer_a' => '<b>A</b>. than',
                'answer_b' => '<b>B</b>. to use', 
                'answer_c' => '<b>C</b>. that it is',
                'answer_d' => '<b>D</b>. of generating',
                'correct_answer' => '<b>A</b>. than',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau16
            [
                'reading_id' => null,
                'content' => '<u>Not only my sister plays</u> the guitar <u>well</u> but she <u>is also</u> a <u>good pianist</u>.',
                'answer_a' => '<b>A</b>. Not only my sister plays',
                'answer_b' => '<b>B</b>. good pianist', 
                'answer_c' => '<b>C</b>. well',
                'answer_d' => '<b>D</b>. is also',
                'correct_answer' => '<b>A</b>. Not only my sister plays',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau17
            [
                'reading_id' => null,
                'content' => 'Vietnam is <u>prone to</u> destructive <u>storms and floods</u> due to <u>their long coastline</u>, killing <u>hundreds of people</u> in Vietnam each year.',
                'answer_a' => '<b>A</b>. prone to',
                'answer_b' => '<b>B</b>. hundreds of people', 
                'answer_c' => '<b>C</b>. their long coastline',
                'answer_d' => '<b>D</b>. storms and floods',
                'correct_answer' => '<b>C</b>. their long coastline',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //Mark the letter A, B, C, or D on your answer sheet to indicate the most suitable response to complete each of the following exchanges.
            //cau18
            [
                'reading_id' => null,
                'content' => 'Two girls are talking with each other about their work at the office.<br>
                - Serena: "You know what? My boss has promised to promote me."<br>
                - Maria: "____________"',
                'answer_a' => '<b>A</b>. Are you ready?',
                'answer_b' => '<b>B</b>. Congratulations!', 
                'answer_c' => '<b>C</b>. It\'s a pleasure!',
                'answer_d' => '<b>D</b>. I am grateful.',
                'correct_answer' => '<b>B</b>. Congratulations',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau19
            [
                'reading_id' => null,
                'content' => 'Mary happens to meet John at the Dining Hall of Goreville & Caius College Cambridge
                University. <br>
                - Mary: "I haven\'t seen you for ages. How are you doing?" <br>
                - John: "____________"',
                'answer_a' => '<b>A</b>. Well, I\'m working as an engineer now.',
                'answer_b' => '<b>B</b>. Never better! How are you?', 
                'answer_c' => '<b>C</b>. A little bit of the weather.',
                'answer_d' => '<b>D</b>. Every cloud has a silver lining.',
                'correct_answer' => '<b>B</b>. Never better! How are you?',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //Reading 20 -> 27
            //cau20
            [
                'reading_id' => 13,
                'content' => 'What can be inferred about the life in 2050 according to the passage?',
                'answer_a' => '<b>A</b>. TV will be an indispensable means of communication and business.',
                'answer_b' => '<b>B</b>. People will not be threatened by the shortage of water due to the polar melting.', 
                'answer_c' => '<b>C</b>. Life in 2050 will be much better than that of today.',
                'answer_d' => '<b>D</b>. The deaf will not have to depend any longer on the electronic hearing devices.',
                'correct_answer' => '<b>D</b>. The deaf will not have to depend any longer on the electronic hearing devices.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau21
            [
                'reading_id' => 13,
                'content' => 'We can conclude from the passage that in 2050________ .',
                'answer_a' => '<b>A</b>. no one will be injured or will die due to accidents',
                'answer_b' => '<b>B</b>. fewer cars will be used to keep the environment green and clean', 
                'answer_c' => '<b>C</b>. people will be able to travel around the world in two hours',
                'answer_d' => '<b>D</b>. space planes will take the place of cars as a means of transport',
                'correct_answer' => '<b>A</b>. no one will be injured or will die due to accidents',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau22
            [
                'reading_id' => 13,
                'content' => 'The word <b><u>"This"</u></b> in paragraph 3 refers to _________ .',
                'answer_a' => '<b>A</b>. demand for water',
                'answer_b' => '<b>B</b>. one of the most serious problem', 
                'answer_c' => '<b>C</b>. growing fruits and vegetables to export',
                'answer_d' => '<b>D</b>. changes in the agriculture',
                'correct_answer' => '<b>C</b>. growing fruits and vegetables to export',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau23
            [
                'reading_id' => 13,
                'content' => 'What is the author\'s attitude in paragraph 3?',
                'answer_a' => '<b>A</b>. Emotional',
                'answer_b' => '<b>B</b>. Explanatory', 
                'answer_c' => '<b>C</b>. Outraged',
                'answer_d' => '<b>D</b>. Concerned',
                'correct_answer' => '<b>D</b>. Concerned',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau24
            [
                'reading_id' => 13,
                'content' => 'Why does the author use <b><u>"prefer robots"</u></b> in paragraph 5?',
                'answer_a' => '<b>A</b>. To emphasize the scientist\'s role in inventing robots.',
                'answer_b' => '<b>B</b>. To encourage the workers to resign from work.', 
                'answer_c' => '<b>C</b>. To show the importance of robots in production.',
                'answer_d' => '<b>D</b>. To compare the robots with the workers.',
                'correct_answer' => '<b>D</b>. To compare the robots with the workers.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau25
            [
                'reading_id' => 13,
                'content' => 'It can be inferred from the passage that ______________ .',
                'answer_a' => '<b>A</b>. cloning is one example of scientists\'s controlling human genes',
                'answer_b' => '<b>B</b>. clones of people may live forever', 
                'answer_c' => '<b>C</b>. cloning will offer babies for the one who won\'t get married',
                'answer_d' => '<b>D</b>. clones of people will be produced with the help of electric devices',
                'correct_answer' => '<b>A</b>. cloning is one example of scientists\'s controlling human genes',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau26
            [
                'reading_id' => 13,
                'content' => 'What may NOT be true about life in 2030?',
                'answer_a' => '<b>A</b>. Blind and deaf people will be helped by scientists to see again and hear again.',
                'answer_b' => '<b>B</b>. Our sources of water for agriculture will increase ten times.', 
                'answer_c' => '<b>C</b>. Scientists will be able to produce clones of people and decide how intelligent they are.',
                'answer_d' => '<b>D</b>. Many forms of entertainment will come to us by computer.',
                'correct_answer' => '<b>B</b>. Our sources of water for agriculture will increase ten times.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau27
            [
                'reading_id' => 13,
                'content' => 'The passage mainly discusses ________ .',
                'answer_a' => '<b>A</b>. the effect of the futurologists\'s prediction on our lives',
                'answer_b' => '<b>B</b>. the changes in our future life compared with our life today', 
                'answer_c' => '<b>C</b>. the importance of cloning in the future',
                'answer_d' => '<b>D</b>. effect of telecommunication and technology on our future life',
                'correct_answer' => '<b>B</b>. the changes in our future life compared with our life today',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //Mark the letter A, B, C, or D on your answer sheet to indicate the word whose underlined part differs from the other three in pronunciation in each of the following questions.
            //cau28
            [
                'reading_id' => null,
                'content' => null,
                'answer_a' => '<b>A</b>. h<u>ou</u>se',
                'answer_b' => '<b>B</b>. ann<u>ou</u>nce', 
                'answer_c' => '<b>C</b>. d<u>ou</u>ble',
                'answer_d' => '<b>D</b>. sh<u>ou</u>t',
                'correct_answer' => '<b>C</b>. d<u>ou</u>ble',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau29
            [
                'reading_id' => null,
                'content' => null,
                'answer_a' => '<b>A</b>. pharao<u>h</u>',
                'answer_b' => '<b>B</b>. <u>h</u>yacinth', 
                'answer_c' => '<b>C</b>. diarr<u>h</u>ea',
                'answer_d' => '<b>D</b>. ex<u>h</u>ilarate',
                'correct_answer' => '<b>B</b>. <u>h</u>yacinth',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //Mark the letter A, B, C, or D on your answer sheet to indicate the sentence that is closest in meaning to each of the following questions.
            //cau30
            [
                'reading_id' => null,
                'content' => 'Unless you pay him the money back, he will sue you.',
                'answer_a' => '<b>A</b>. You should pay him the money back or he will sue you.',
                'answer_b' => '<b>B</b>. You should either pay him the money back or he will sue you.', 
                'answer_c' => '<b>C</b>. He will not sue you if you receive the money.',
                'answer_d' => '<b>D</b>. If you don\'t pay him the money back, he would sue you.',
                'correct_answer' => '<b>A</b>. You should pay him the money back or he will sue you.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau31
            [
                'reading_id' => null,
                'content' => 'She asked whether I could speak any other languages.',
                'answer_a' => '<b>A</b>. "What are other languages that you can speak?" she asked.',
                'answer_b' => '<b>B</b>. "What other languages could you speak?" she asked.', 
                'answer_c' => '<b>C</b>. "How many other languages can you speak?" she asked.',
                'answer_d' => '<b>D</b>. "Can you speak any other languages?" she asked.',
                'correct_answer' => '<b>D</b>. "Can you speak any other languages?" she asked.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau32
            [
                'reading_id' => null,
                'content' => 'People rumour that the leader has been suffering from a rare disease.',
                'answer_a' => '<b>A</b>. It was rumoured that the leader has been suffering from a rare disease.',
                'answer_b' => '<b>B</b>. A rare disease is rumoured to be causing sufferings to the leader.', 
                'answer_c' => '<b>C</b>. The leader is rumoured to have been suffering from a rare disease.',
                'answer_d' => '<b>D</b>. The leader has been rumoured to suffer from a rare disease.',
                'correct_answer' => '<b>C</b>. The leader is rumoured to have been suffering from a rare disease.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //Mark the letter A, B, C, or D on your answer sheet to indicate the sentence that best combines each pair of sentences in the following questions.
            //cau33
            [
                'reading_id' => null,
                'content' => 'Melissa\'s father was very busy. He still played with her.',
                'answer_a' => '<b>A</b>. Because of playing with Melissa, her father was very busy.',
                'answer_b' => '<b>B</b>. Melissa\'s father was so busy that he could not play with her.', 
                'answer_c' => '<b>C</b>. Busy as Melissa\'s father was, he still played with her.',
                'answer_d' => '<b>D</b>. Melissa\'s father was busy enough to play with her.',
                'correct_answer' => '<b>C</b>. Busy as Melissa\'s father was, he still played with her.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau34
            [
                'reading_id' => null,
                'content' => 'What a pity that the TV packed up. We cannot watch the world news now.',
                'answer_a' => '<b>A</b>. If it hadn\'t been for the TV packed up, we could watch the world news now.',
                'answer_b' => '<b>B</b>. If the TV had not packed up, we could watch the world news now.', 
                'answer_c' => '<b>C</b>. If the TV didn\'t pack up, we could watch the world news now.',
                'answer_d' => '<b>D</b>. Had the TV not picked up, we could have watched the world news now.',
                'correct_answer' => '<b>B</b>. If the TV had not packed up, we could watch the world news now.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
        
            //Mark the letter A, B, C, or D on your answer sheet to indicate the word that differs from the other three in the position of the primary stress in each of the following questions.
            //cau35
            [
                'reading_id' => null,
                'content' => null,
                'answer_a' => '<b>A</b>. possess',
                'answer_b' => '<b>B</b>. disturb', 
                'answer_c' => '<b>C</b>. bother',
                'answer_d' => '<b>D</b>. provide',
                'correct_answer' => '<b>C</b>. bother',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau36
            [
                'reading_id' => null,
                'content' => null,
                'answer_a' => '<b>A</b>. Christianity',
                'answer_b' => '<b>B</b>. representative', 
                'answer_c' => '<b>C</b>. intercultural',
                'answer_d' => '<b>D</b>. qualification',
                'correct_answer' => '<b>D</b>. qualification',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //Mark the letter A, B, C, or D on your answer sheet to indicate the word(s) CLOSEST in meaning to the underlined bold word(s) in each of the following questions.
            //cau37
            [
                'reading_id' => null,
                'content' => 'It would be unfair to judge Jacob on such a brief <b><u>acquaintanceship</u></b> with him.',
                'answer_a' => '<b>A</b>. pleasant conversation',
                'answer_b' => '<b>B</b>. slight friendship', 
                'answer_c' => '<b>C</b>. quick companionship',
                'answer_d' => '<b>D</b>. mild similarity',
                'correct_answer' => '<b>B</b>. slight friendship',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau38
            [
                'reading_id' => null,
                'content' => 'This computer is $5000. Doesn\'t sound right. I think they\'re trying <b><u>to rip people off</u></b>.',
                'answer_a' => '<b>A</b>. to try to tear up people\'s wallet',
                'answer_b' => '<b>B</b>. to think someone is a fool', 
                'answer_c' => '<b>C</b>. to sell something by illegal price fixing',
                'answer_d' => '<b>D</b>. to try to sell something at too high price',
                'correct_answer' => '<b>D</b>. to try to sell something at too high price',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //Reading 39 -> 43.
            //cau39
            [
                'reading_id' => 14,
                'content' => 'Which of the following would be the most appropriate title for the passage?',
                'answer_a' => '<b>A</b>. New Containers for Fluids',
                'answer_b' => '<b>B</b>. High Temperature Zones on the Earth', 
                'answer_c' => '<b>C</b>. The Beginnings of Modem Physics',
                'answer_d' => '<b>D</b>. The Properties of Gases and Liquids',
                'correct_answer' => '<b>D</b>. The Properties of Gases and Liquids',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau40
            [
                'reading_id' => 14,
                'content' => 'According to the passage, the difference between a liquid and a gas under normal conditions on Earth is that the liquid _________ .',
                'answer_a' => '<b>A</b>. has a permanent structure',
                'answer_b' => '<b>B</b>. forms a free surface', 
                'answer_c' => '<b>C</b>. is affected by changes in pressure',
                'answer_d' => '<b>D</b>. is considerably more common',
                'correct_answer' => '<b>B</b>. forms a free surface',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau41
            [
                'reading_id' => 14,
                'content' => 'According to the passage, in the nineteenth century some scientists viewed liquidons and gasons as __________ .',
                'answer_a' => '<b>A</b>. different types of molecules',
                'answer_b' => '<b>B</b>. dissolving particles heavy molecules', 
                'answer_c' => '<b>C</b>. heavy molecules',
                'answer_d' => '<b>D</b>. fluids',
                'correct_answer' => '<b>A</b>. different types of molecules',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau42
            [
                'reading_id' => 14,
                'content' => 'According to the passage, what happens when the temperature is increased in a closed container holding a liquid?',
                'answer_a' => '<b>A</b>. The liquid and gas phases become more similar.',
                'answer_b' => '<b>B</b>. The liquid and the gas become less dense.', 
                'answer_c' => '<b>C</b>. The container expands.',
                'answer_d' => '<b>D</b>. The liquid evaporates out of the container.',
                'correct_answer' => '<b>A</b>. The liquid and gas phases become more similar.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau43
            [
                'reading_id' => 14,
                'content' => 'The word <b><u>"apparent"</u></b> is closest in meaning to ________ .',
                'answer_a' => '<b>A</b>. small to recognize',
                'answer_b' => '<b>B</b>. simple to perform', 
                'answer_c' => '<b>C</b>. difficult to see',
                'answer_d' => '<b>D</b>. easy to notice',
                'correct_answer' => '<b>D</b>. easy to notice',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //Mark the letter A, B, C, or D on your answer sheet to indicate the word(s) OPPOSITE in meaning to the underlined bold word(s) in each of the following questions.
            //cau44
            [
                'reading_id' => null,
                'content' => 'Don\'t <b><u>put words into my mouth</u></b>! I never said I hate roses.',
                'answer_a' => '<b>A</b>. mention wrongly',
                'answer_b' => '<b>B</b>. quote exactly', 
                'answer_c' => '<b>C</b>. interrupt rudely',
                'answer_d' => '<b>D</b>. ask politely',
                'correct_answer' => '<b>B</b>. quote exactly',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau45
            [
                'reading_id' => null,
                'content' => 'The air is naturally <b><u>contaminated</u></b> by foreign matter such as plant pollens and dust.',
                'answer_a' => '<b>A</b>. occupied',
                'answer_b' => '<b>B</b>. polluted', 
                'answer_c' => '<b>C</b>. concentrated',
                'answer_d' => '<b>D</b>. purified',
                'correct_answer' => '<b>D</b>. purified',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //Reading 46 -> 50.
            //cau46
            [
                'reading_id' => 15,
                'content' => null,
                'answer_a' => '<b>A</b>. prevent',
                'answer_b' => '<b>B</b>. delay', 
                'answer_c' => '<b>C</b>. avoid',
                'answer_d' => '<b>D</b>. refuse',
                'correct_answer' => '<b>C</b>. avoid',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau47
            [
                'reading_id' => 15,
                'content' => null,
                'answer_a' => '<b>A</b>. by',
                'answer_b' => '<b>B</b>. of', 
                'answer_c' => '<b>C</b>. with',
                'answer_d' => '<b>D</b>. in',
                'correct_answer' => '<b>A</b>. by',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau48
            [
                'reading_id' => 15,
                'content' => null,
                'answer_a' => '<b>A</b>. Although',
                'answer_b' => '<b>B</b>. Therefore', 
                'answer_c' => '<b>C</b>. Then',
                'answer_d' => '<b>D</b>. However',
                'correct_answer' => '<b>D</b>. However',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau49
            [
                'reading_id' => 15,
                'content' => null,
                'answer_a' => '<b>A</b>. situation',
                'answer_b' => '<b>B</b>. condition', 
                'answer_c' => '<b>C</b>. state',
                'answer_d' => '<b>D</b>. affair',
                'correct_answer' => '<b>A</b>. situation',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau50
            [
                'reading_id' => 15,
                'content' => null,
                'answer_a' => '<b>A</b>. probably',
                'answer_b' => '<b>B</b>. extremely', 
                'answer_c' => '<b>C</b>. rapidly',
                'answer_d' => '<b>D</b>. mainly',
                'correct_answer' => '<b>C</b>. rapidly',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            // thi thu 2019 de so 2
            //Mark the letter A, B, C, or D on your answer sheet to indicate the word whose underlined part differs from the other three in pronunciation in each of the following questions.
            //cau1
            [
                'reading_id' => null,
                'content' => null,
                'answer_a' => '<b>A</b>. handicapp<u>ed</u>',
                'answer_b' => '<b>B</b>. advantag<u>ed</u>', 
                'answer_c' => '<b>C</b>. organiz<u>ed</u>',
                'answer_d' => '<b>D</b>. compromis<u>ed</u>',
                'correct_answer' => '<b>A</b>. handicapp<u>ed</u>',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau2
            [
                'reading_id' => null,
                'content' => null,
                'answer_a' => '<b>A</b>. leis<u>ure</u>',
                'answer_b' => '<b>B</b>. pleas<u>ure</u>', 
                'answer_c' => '<b>C</b>. fail<u>ure</u>',
                'answer_d' => '<b>D</b>. meas<u>ure</u>',
                'correct_answer' => '<b>C</b>. fail<u>ure</u>',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],

            //Mark the letter A, B, C, or D on your answer sheet to indicate the word that differs from the other three in the position of primary stress in each ofthefollowing questions.
            //cau3
            [
                'reading_id' => null,
                'content' => null,
                'answer_a' => '<b>A</b>. broaden',
                'answer_b' => '<b>B</b>. persuade', 
                'answer_c' => '<b>C</b>. reduce',
                'answer_d' => '<b>D</b>. explain',
                'correct_answer' => '<b>A</b>. broaden',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau4
            [
                'reading_id' => null,
                'content' => null,
                'answer_a' => '<b>A</b>. rectangular',
                'answer_b' => '<b>B</b>. confidential', 
                'answer_c' => '<b>C</b>. conservative',
                'answer_d' => '<b>D</b>. political',
                'correct_answer' => '<b>B</b>. confidential',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],

            //Mark the letter A, B, C, or D on your answer sheet to indicate the correct answer to each of the following questions.
            //cau5
            [
                'reading_id' => null,
                'content' => 'Richard Byrd was ____ first person in history to fly over ____ North Pole.',
                'answer_a' => '<b>A</b>. the - a',
                'answer_b' => '<b>B</b>. the - Ø', 
                'answer_c' => '<b>C</b>. the - the',
                'answer_d' => '<b>D</b>. Ø - Ø',
                'correct_answer' => '<b>C</b>. the - the',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau6
            [
                'reading_id' => null,
                'content' => 'The President _____ a speech, but in the end he _____ his mind.',
                'answer_a' => '<b>A</b>. delivered - had changed',
                'answer_b' => '<b>B</b>. was delivering - changed', 
                'answer_c' => '<b>C</b>. would deliver - had changed',
                'answer_d' => '<b>D</b>. was going to deliver - changed',
                'correct_answer' => '<b>D</b>. was going to deliver - changed',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau7
            [
                'reading_id' => null,
                'content' => '_____ you happen to visit him, give him my best wishes.',
                'answer_a' => '<b>A</b>. Could',
                'answer_b' => '<b>B</b>. Would', 
                'answer_c' => '<b>C</b>. Might',
                'answer_d' => '<b>D</b>. Should',
                'correct_answer' => '<b>D</b>. Should',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau8
            [
                'reading_id' => null,
                'content' => 'The new supermarket is so much cheaper than the one in John Street. _____, they do free home deliveries.',
                'answer_a' => '<b>A</b>. Moreover',
                'answer_b' => '<b>B</b>. Consequently', 
                'answer_c' => '<b>C</b>. Nevertheless',
                'answer_d' => '<b>D</b>. Instead',
                'correct_answer' => '<b>A</b>. Moreover',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau9
            [
                'reading_id' => null,
                'content' => 'Jimmy, dressed in jeans and a black leather jacket, arrived at the party _____ his motorbike.',
                'answer_a' => '<b>A</b>. by',
                'answer_b' => '<b>B</b>. on', 
                'answer_c' => '<b>C</b>. in',
                'answer_d' => '<b>D</b>. through',
                'correct_answer' => '<b>B</b>. on',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau10
            [
                'reading_id' => null,
                'content' => 'We decided not to travel, _____ the terrible weather forecast.',
                'answer_a' => '<b>A</b>. having heard',
                'answer_b' => '<b>B</b>. to have heard', 
                'answer_c' => '<b>C</b>. having been heard',
                'answer_d' => '<b>D</b>. to have been heard',
                'correct_answer' => '<b>A</b>. having heard',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau11
            [
                'reading_id' => null,
                'content' => '_____, she managed to hide her feelings.',
                'answer_a' => '<b>A</b>. However jealous she felt',
                'answer_b' => '<b>B</b>. if she would feel jealous', 
                'answer_c' => '<b>C</b>. Despite of her being jealous',
                'answer_d' => '<b>D</b>. In case she felt jealous',
                'correct_answer' => '<b>A</b>. However jealous she felt',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau12
            [
                'reading_id' => null,
                'content' => 'The manager regrets _____ that a lot of people will be made redundant by the company next year.',
                'answer_a' => '<b>A</b>. announcing',
                'answer_b' => '<b>B</b>. having announced', 
                'answer_c' => '<b>C</b>. to announced',
                'answer_d' => '<b>D</b>. to have announced',
                'correct_answer' => '<b>C</b>. to announced',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau13
            [
                'reading_id' => null,
                'content' => 'During the presentation, each _____ can possible three questions to the guest speaker.',
                'answer_a' => '<b>A</b>. attendance',
                'answer_b' => '<b>B</b>. attentive', 
                'answer_c' => '<b>C</b>. attendee',
                'answer_d' => '<b>D</b>. attend',
                'correct_answer' => '<b>C</b>. attendee',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau14
            [
                'reading_id' => null,
                'content' => 'Today, some students tend to _____ the importance of soft skills as they solely focus on academic subjects at school.',
                'answer_a' => '<b>A</b>. overlook',
                'answer_b' => '<b>B</b>. urge', 
                'answer_c' => '<b>C</b>. emphasize',
                'answer_d' => '<b>A</b>. implement',
                'correct_answer' => '<b>D</b>. overlook',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau15
            [
                'reading_id' => null,
                'content' => 'In some countries, many old-aged parents like to live in a nursing home. They want to _____ independent lives.',
                'answer_a' => '<b>A</b>. give',
                'answer_b' => '<b>B</b>. take', 
                'answer_c' => '<b>C</b>. keep',
                'answer_d' => '<b>D</b>. lead',
                'correct_answer' => '<b>D</b>. lead',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau16
            [
                'reading_id' => null,
                'content' => 'The widened _____ will help keep traffic flowing during rush hours.',
                'answer_a' => '<b>A</b>. entryway',
                'answer_b' => '<b>B</b>. urrunwayge', 
                'answer_c' => '<b>C</b>. freeway',
                'answer_d' => '<b>D</b>. pathway',
                'correct_answer' => '<b>C</b>. freeway',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau17
            [
                'reading_id' => null,
                'content' => 'As John _____ enjoyed doing research, he never could imagine himself pursuing other careers.',
                'answer_a' => '<b>A</b>. thoroughly',
                'answer_b' => '<b>B</b>. totally', 
                'answer_c' => '<b>C</b>. extremely',
                'answer_d' => '<b>D</b>. utterly',
                'correct_answer' => '<b>A</b>. thoroughly',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau18
            [
                'reading_id' => null,
                'content' => 'Everyone will tell you that becoming a parent is challenging, but you never really know what that means until you learn about it the _____ way.',
                'answer_a' => '<b>A</b>. long',
                'answer_b' => '<b>B</b>. direct', 
                'answer_c' => '<b>C</b>. full',
                'answer_d' => '<b>D</b>. hard',
                'correct_answer' => '<b>D</b>. hard',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //Mark the letter A, B, C, or D onyour answer sheet to indicate the word(s) CLOSEST in meaning to the underlined word(s) in each of thefollowing questions.
            //cau19
            [
                'reading_id' => null,
                'content' => 'Tim is thinking of leaving his present job because his manager is always <b><u>getting</u></b> at him.',
                'answer_a' => '<b>A</b>. hitting',
                'answer_b' => '<b>B</b>. disturbing', 
                'answer_c' => '<b>C</b>. defending',
                'answer_d' => '<b>D</b>. criticizing',
                'correct_answer' => '<b>D</b>. criticizing',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau20
            [
                'reading_id' => null,
                'content' => 'You can use a microwave or cook this kind of food in a <b><u>conventional</u></b> oven.',
                'answer_a' => '<b>A</b>. unique',
                'answer_b' => '<b>B</b>. modern', 
                'answer_c' => '<b>C</b>. traditionall',
                'answer_d' => '<b>D</b>. extraordinary',
                'correct_answer' => '<b>C</b>. traditionall',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //Mark the letter A, B, C, or D onyour answer sheet to indicate the word(s) OPPOSITE in meaning to the underlined word(s) in each of the following questions.
            //cau21
            [
                'reading_id' => null,
                'content' => 'Contrary to their expectations, there was widespread <b><u>apathy</u></b> among voters on that issue.',
                'answer_a' => '<b>A</b>. interest',
                'answer_b' => '<b>B</b>. obedience', 
                'answer_c' => '<b>C</b>. resistance',
                'answer_d' => '<b>D</b>. opposition',
                'correct_answer' => '<b>A</b>. interest',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau22
            [
                'reading_id' => null,
                'content' => 'Doctors and nurses of this hospital have worked round the clock to help those injured in the recent earthquake.',
                'answer_a' => '<b>A</b>. permanently',
                'answer_b' => '<b>B</b>. interruptedly', 
                'answer_c' => '<b>C</b>. continuously',
                'answer_d' => '<b>D</b>. accurately',
                'correct_answer' => '<b>B</b>. interruptedly',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],

            //Mark the letter A, B, C, or D on your answer sheet to indicate the most suitable response to complete each of the following exchanges.
            //cau23
            [
                'reading_id' => null,
                'content' => 'Anne is seeing Mary off at the airport.<br>
                            Anne: "Don\'t fail to look after yourself, Mary!"<br>
                            Marry: "_____"',
                'answer_a' => '<b>A</b>. Of course, you are an adult.',
                'answer_b' => '<b>B</b>. Oh, I knew about that.', 
                'answer_c' => '<b>C</b>. The same to you.',
                'answer_d' => '<b>D</b>. Thanks, I will.',
                'correct_answer' => '<b>D</b>. Thanks, I will.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau24
            [
                'reading_id' => null,
                'content' => 'Frank is inviting William to go to the waterpark.<br>
                        Frank: "What about going to the waterpark?" <br>
                        William: "_____"',
                'answer_a' => '<b>A</b>. That\'s good idea.',
                'answer_b' => '<b>B</b>. That\'s right.', 
                'answer_c' => '<b>C</b>. Of course!',
                'answer_d' => '<b>D</b>. Right! Go ahead.',
                'correct_answer' => '<b>A</b>. That\'s good idea.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],

            //Reading 25 -> 29.
            //cau25
            [
                'reading_id' => 16,
                'content' => null,
                'answer_a' => '<b>A</b>. own',
                'answer_b' => '<b>B</b>. private', 
                'answer_c' => '<b>C</b>. personal',
                'answer_d' => '<b>D</b>. individual',
                'correct_answer' => '<b>A</b>. own',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau26
            [
                'reading_id' => 16,
                'content' => null,
                'answer_a' => '<b>A</b>. like',
                'answer_b' => '<b>B</b>. alike', 
                'answer_c' => '<b>C</b>. likely',
                'answer_d' => '<b>C</b>. unlikely',
                'correct_answer' => '<b>D</b>. likely',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau27
            [
                'reading_id' => 16,
                'content' => null,
                'answer_a' => '<b>A</b>. by',
                'answer_b' => '<b>B</b>. on', 
                'answer_c' => '<b>C</b>. in',
                'answer_d' => '<b>D</b>. with',
                'correct_answer' => '<b>B</b>. on',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau28
            [
                'reading_id' => 16,
                'content' => null,
                'answer_a' => '<b>A</b>. conduct',
                'answer_b' => '<b>B</b>. conducts', 
                'answer_c' => '<b>C</b>. conducting',
                'answer_d' => '<b>D</b>. conducted',
                'correct_answer' => '<b>D</b>. conducted',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau29
            [
                'reading_id' => 16,
                'content' => null,
                'answer_a' => '<b>A</b>. who',
                'answer_b' => '<b>B</b>. what', 
                'answer_c' => '<b>C</b>. which',
                'answer_d' => '<b>D</b>. whom',
                'correct_answer' => '<b>A</b>. who',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //Reading 30 -> 34
            //cau30
            [
                'reading_id' => 17,
                'content' => 'What is the main idea of the passage?',
                'answer_a' => '<b>A</b>. The tropical cyclone is the most powerful force on the earth.',
                'answer_b' => '<b>B</b>. The tropical cyclone can cause flooding and damage to structures.', 
                'answer_c' => '<b>C</b>. A tropical cyclone forms over the oceans and has great power.',
                'answer_d' => '<b>D</b>. The tropical cyclone is called by different names around the world.',
                'correct_answer' => '<b>C</b>. A tropical cyclone forms over the oceans and has great power.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau31
            [
                'reading_id' => 17,
                'content' => 'According to paragraph 2, which of the following is true about the eyewall?',
                'answer_a' => '<b>A</b>. The eyewall is formed in cold weather.',
                'answer_b' => '<b>B</b>. When the eyewall passes overhead, the wind weakens.', 
                'answer_c' => '<b>C</b>. The temperature is highest around the eye.',
                'answer_d' => '<b>D</b>. The eyewall is a cloud band that surrounds the eye.',
                'correct_answer' => '<b>D</b>. The eyewall is a cloud band that surrounds the eye.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau32
            [
                'reading_id' => 17,
                'content' => 'What can be inferred about typhoons, cyclones and hurricanes?',
                'answer_a' => '<b>A</b>. Typhoons, cyclones and hurricanes form together above the oceans.',
                'answer_b' => '<b>B</b>. A typhoon is stronger than both the cyclone and the hurricane.', 
                'answer_c' => '<b>C</b>. Typhoons, cyclones and hurricanes are all most powerful over a humid ocean.',
                'answer_d' => '<b>D</b>. Although tropical cyclones have different names, they are basically the same.',
                'correct_answer' => '<b>D</b>. Although tropical cyclones have different names, they are basically the same.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau33
            [
                'reading_id' => 17,
                'content' => 'The word <b><u>"it"</u></b> in paragraph 5 refers to _____.',
                'answer_a' => '<b>A</b>. a tropical cyclone',
                'answer_b' => '<b>B</b>. the wind', 
                'answer_c' => '<b>C</b>. torrential rain',
                'answer_d' => '<b>D</b>. the storm surge',
                'correct_answer' => '<b>D</b>. the storm surge',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau34
            [
                'reading_id' => 17,
                'content' => 'The word <b><u>"erratic"</u></b> in paragraph 5 is closest in meaning to .',
                'answer_a' => '<b>A</b>. complicated',
                'answer_b' => '<b>B</b>. unpredictable', 
                'answer_c' => '<b>C</b>. disastrous',
                'answer_d' => '<b>D</b>. explosive',
                'correct_answer' => '<b>B</b>. unpredictable',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //Reading 35 -> 42
            //cau35
            [
                'reading_id' => 18,
                'content' => 'It can be inferred from paragraph 1 that one important factor in the increasing importance of education in the United States was _____.',
                'answer_a' => '<b>A</b>. the growing number of schools in frontier communities',
                'answer_b' => '<b>B</b>. an increase in the number of trained teachers', 
                'answer_c' => '<b>C</b>. the expanding economic problems of schools',
                'answer_d' => '<b>D</b>. the increased urbanization of the entire country',
                'correct_answer' => '<b>D</b>. the increased urbanization of the entire country',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau36
            [
                'reading_id' => 18,
                'content' => 'The word <b><u>"means"</u></b> in paragraph 1 is closest in meaning to _____.',
                'answer_a' => '<b>A</b>. advantages',
                'answer_b' => '<b>B</b>. probability', 
                'answer_c' => '<b>C</b>. method',
                'answer_d' => '<b>D</b>. qualifications',
                'correct_answer' => '<b>C</b>. method',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau37
            [
                'reading_id' => 18,
                'content' => 'The phrase <b><u>"coincided with"</u></b> in paragraph 2 is closest in meaning to _____.',
                'answer_a' => '<b>A</b>. was influenced by',
                'answer_b' => '<b>B</b>. happened at the same time as', 
                'answer_c' => '<b>C</b>. began to grow rapidly',
                'answer_d' => '<b>D</b>. ensured the success of',
                'correct_answer' => '<b>B</b>. happened at the same time as',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau38
            [
                'reading_id' => 18,
                'content' => 'According to the passage, one important change in United States education by the 1920\'s was that _____.',
                'answer_a' => '<b>A</b>. most places required children to attend school',
                'answer_b' => '<b>B</b>. the amount of time spent on formal education was limited', 
                'answer_c' => '<b>C</b>. new regulations were imposed on nontraditional education',
                'answer_d' => '<b>D</b>. adults and children studied in the same classes',
                'correct_answer' => '<b>A</b>. most places required children to attend school',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau39
            [
                'reading_id' => 18,
                'content' => 'Vacation schools and extracurricular activities are mentioned in paragraph 2 to illustrate _____.',
                'answer_a' => '<b>A</b>. alternatives to formal education provided by public schools',
                'answer_b' => '<b>B</b>. the importance of educational changes', 
                'answer_c' => '<b>C</b>. activities that competed to attract new immigrants to their programs',
                'answer_d' => '<b>D</b>. the increased impact of public schools on students',
                'correct_answer' => '<b>D</b>. the increased impact of public schools on students',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau40
            [
                'reading_id' => 18,
                'content' => 'According to the passage, early-twentieth century education reformers believed that _____.',
                'answer_a' => '<b>A</b>. different groups needed different kinds of education',
                'answer_b' => '<b>B</b>. special programs should be set up in frontier communities to modernize them', 
                'answer_c' => '<b>C</b>. corporations and other organizations damaged educational progress',
                'answer_d' => '<b>D</b>. more women should be involved in education and industry',
                'correct_answer' => '<b>A</b>. different groups needed different kinds of education',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau41
            [
                'reading_id' => 18,
                'content' => 'The word "it" in paragraph 4 refers to _____.',
                'answer_a' => '<b>A</b>. consumption',
                'answer_b' => '<b>B</b>. production', 
                'answer_c' => '<b>C</b>. homemaking',
                'answer_d' => '<b>D</b>. education',
                'correct_answer' => '<b>C</b>. homemaking',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau42
            [
                'reading_id' => 18,
                'content' => 'All of the following statements are true EXCEPT _____ .',
                'answer_a' => '<b>A</b>. immigrants played a part in changing American education system in the 20th century',
                'answer_b' => '<b>B</b>. many foreign people found it easier to settle down in American thanks to schools', 
                'answer_c' => '<b>C</b>. prior to the 20th century, public education had never had any influence on students\' lives',
                'answer_d' => '<b>D</b>. among the changes in American education system last century, one centred on women.',
                'correct_answer' => '<b>C</b>. prior to the 20th century, public education had never had any influence on students\' lives',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //Mark the letter A, B, C, or D on your answer sheet to indicate the underlined part that needs correction in each of the following questions.
            //cau43
            [
                'reading_id' => null,
                'content' => 'Ninety-seven <b><u>percent</u></b> of the <b><u>world\'s</u></b> water <b><u>are</u></b> salt water <b><u>found</u></b> in the oceans.',
                'answer_a' => '<b>A</b>. percent',
                'answer_b' => '<b>B</b>. world\'s', 
                'answer_c' => '<b>C</b>. are',
                'answer_d' => '<b>D</b>. found',
                'correct_answer' => '<b>C</b>. are',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau44
            [
                'reading_id' => null,
                'content' => 'Fred Astaire <b><u>is said</u></b> <b><u>to have been</u></b> the most popular dancer <b><u>of his time</u></b>, but he was also a talented actor, <b><u>a singer</u></b>, and choreographer.',
                'answer_a' => '<b>A</b>. is said',
                'answer_b' => '<b>B</b>. to have been', 
                'answer_c' => '<b>C</b>. of his time',
                'answer_d' => '<b>D</b>. a singer',
                'correct_answer' => '<b>D</b>. a singer',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau45
            [
                'reading_id' => null,
                'content' => 'Jane\'s friends insist that she <b><u>will stay</u></b> <b><u>at</u></b> their house when she <b><u>visits</u></b> Toronto <b><u>next weekend</u></b>.',
                'answer_a' => '<b>A</b>. will stay',
                'answer_b' => '<b>B</b>. at', 
                'answer_c' => '<b>C</b>. visits',
                'answer_d' => '<b>D</b>. next weekend',
                'correct_answer' => '<b>A</b>. will stay',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],

            //Mark the letter A, B, C, or D on your answer sheet to indicate the sentence that is closest in meaning to each of the following questions.
            //cau46
            [
                'reading_id' => null,
                'content' => '"What a novel idea for thefarewell party you\'ve got," said Nam to the monitor.',
                'answer_a' => '<b>A</b>. Nam thought over the novel idea for the farewell party.',
                'answer_b' => '<b>B</b>. Nam came up with the novel idea for the farewell party.', 
                'answer_c' => '<b>C</b>. Nam said that it was a novel idea of his classmates for the farewell party.',
                'answer_d' => '<b>D</b>. Nam exclaimed with admiration at the novel idea for the farewell party of the monitor.',
                'correct_answer' => '<b>D</b>. Nam exclaimed with admiration at the novel idea for the farewell party of the monitor.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau47
            [
                'reading_id' => null,
                'content' => 'It is believed that the thief broke into the house through the bedroom window.',
                'answer_a' => '<b>A</b>. The thief is believed that he broke into the house through the bedroom.',
                'answer_b' => '<b>B</b>. The thief is believed to have broken into the house through the bedroom window.', 
                'answer_c' => '<b>C</b>. The thief was believed to break into the house through the bedroom window.',
                'answer_d' => '<b>D</b>. The thief was believed to have broken into the house through the bedroom window.',
                'correct_answer' => '<b>B</b>. The thief is believed to have broken into the house through the bedroom window.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau48
            [
                'reading_id' => null,
                'content' => 'To let Harold join our new project was silly as he knows little about our company.',
                'answer_a' => '<b>A</b>. Harold couldn\'t have joined our new project with such poor knowledge about our company.',
                'answer_b' => '<b>B</b>. Harold must have known so little about our company that he wasn\'t let to join our new project.', 
                'answer_c' => '<b>C</b>. We shouldn\'t have allowed Harold to join our new project as he doesn\'t know much about our company.',
                'answer_d' => '<b>D</b>. We would have joined the new project with Harold provided that he knew much about our company.',
                'correct_answer' => '<b>C</b>. We shouldn\'t have allowed Harold to join our new project as he doesn\'t know much about our company.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //Mark the letter A, B, C, or D on your answer sheet to indicate the sentence that best combines each pair of sentences in thefollowing questions.
            //cau49
            [
                'reading_id' => null,
                'content' => 'The taxi driver ignored the stop sign. Then, he crashed his vehicle.',
                'answer_a' => '<b>A</b>. If the taxi driver ignored the stop sign, he crashed his vehicle.',
                'answer_b' => '<b>B</b>. Unless the taxi driver paid attention to the stop sign, he would have crashed his vehicle.', 
                'answer_c' => '<b>C</b>. The taxi driver would not have crashed his vehicle if he had taken notice of the stop sign.',
                'answer_d' => '<b>D</b>. The taxi driver didn\'t ignore the stop sign, or he would not have crashed his vehicle.',
                'correct_answer' => '<b>C</b>. The taxi driver would not have crashed his vehicle if he had taken notice of the stop sign.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau50
            [
                'reading_id' => null,
                'content' => 'She is so attractive. Many boys run after her.',
                'answer_a' => '<b>A</b>. So attractive is she many boys that run after her.',
                'answer_b' => '<b>B</b>. So attractive is she that many boys run after her.', 
                'answer_c' => '<b>C</b>. So attractive she is that many boys run after her.',
                'answer_d' => '<b>D</b>. So that attractive she is many boys that run after her.',
                'correct_answer' => '<b>B</b>. So attractive is she that many boys run after her.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //thi thu 2020 de 1
            //Mark the letter A, B, C, or D on your answer sheet to indicate the word that differs from the other three in the position of primary stress in each of the following questions.
            //cau1
            [
                'reading_id' => null,
                'content' => null,
                'answer_a' => '<b>A</b>. marriage',
                'answer_b' => '<b>B</b>. response', 
                'answer_c' => '<b>C</b>. maintain',
                'answer_d' => '<b>D</b>. believe',
                'correct_answer' => '<b>A</b>. marriage',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau2
            [
                'reading_id' => null,
                'content' => null,
                'answer_a' => '<b>A</b>. obedient',
                'answer_b' => '<b>B</b>. decision', 
                'answer_c' => '<b>C</b>. mischievous',
                'answer_d' => '<b>D</b>. biologist',
                'correct_answer' => '<b>C</b>. mischievous',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //Mark the letter A, B, C, or D on your answer sheet to indicate the correct answer to each of the following questions
            //cau3
            [
                'reading_id' => null,
                'content' => 'The marathon, first staged in 1896, ______ the legendary feat of a Greek soldier who carried news of victory from the battle at Marathon to Athens.',
                'answer_a' => '<b>A</b>. commemorates',
                'answer_b' => '<b>B</b>. commemorated', 
                'answer_c' => '<b>C</b>. was commemorated',
                'answer_d' => '<b>D</b>. commemorating',
                'correct_answer' => '<b>A</b>. commemorates',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau4
            [
                'reading_id' => null,
                'content' => 'Football is thought ___________ in the world.',
                'answer_a' => '<b>A</b>. to have played the most popular sport',
                'answer_b' => '<b>B</b>. to be the most popular sport', 
                'answer_c' => '<b>C</b>. to play the most popular sport',
                'answer_d' => '<b>D</b>. to have been the most po pular sport',
                'correct_answer' => '<b>B</b>. to be the most popular sport',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau5
            [
                'reading_id' => null,
                'content' => 'The number of unemployed people __________ recently.',
                'answer_a' => '<b>A</b>. is increasing',
                'answer_b' => '<b>B</b>. has increased', 
                'answer_c' => '<b>C</b>. have increased',
                'answer_d' => '<b>D</b>. increase',
                'correct_answer' => '<b>B</b>. has increased',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau6
            [
                'reading_id' => null,
                'content' => 'I believe that he was concerned __________ all those matters which his wife mentioned.',
                'answer_a' => '<b>A</b>. upon',
                'answer_b' => '<b>B</b>. over', 
                'answer_c' => '<b>C</b>. above',
                'answer_d' => '<b>D</b>. with',
                'correct_answer' => '<b>D</b>. with',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau7
            [
                'reading_id' => null,
                'content' => 'I ________ very well with my roommate now. We never have arguments.',
                'answer_a' => '<b>A</b>. carry on',
                'answer_b' => '<b>B</b>. go on', 
                'answer_c' => '<b>C</b>. put on',
                'answer_d' => '<b>D</b>. get on',
                'correct_answer' => '<b>D</b>. get on',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau8
            [
                'reading_id' => null,
                'content' => 'Can you tell me who is responsible _____________ checking passports are?',
                'answer_a' => '<b>A</b>. to',
                'answer_b' => '<b>B</b>. in', 
                'answer_c' => '<b>C</b>. for',
                'answer_d' => '<b>D</b>. about',
                'correct_answer' => '<b>C</b>. for',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau9
            [
                'reading_id' => null,
                'content' => 'When my father was young, he ______ get up early to do the gardening.',
                'answer_a' => '<b>A</b>. used to',
                'answer_b' => '<b>B</b>. was used to', 
                'answer_c' => '<b>C</b>. got used to',
                'answer_d' => '<b>D</b>. use to',
                'correct_answer' => '<b>A</b>. used to',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau10
            [
                'reading_id' => null,
                'content' => 'The preparation_________ by the time the guest_________',
                'answer_a' => '<b>A</b>. have finished- arrived',
                'answer_b' => '<b>B</b>. had been finished- arrived', 
                'answer_c' => '<b>C</b>. had finished-were arriving',
                'answer_d' => '<b>D</b>. have been finished- were arrived',
                'correct_answer' => '<b>B</b>. had been finished- arrived',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau11
            [
                'reading_id' => null,
                'content' => 'If she had known how awful this job was going to be, she__________it.',
                'answer_a' => '<b>A</b>. wouldn\'t have accepted',
                'answer_b' => '<b>B</b>. would have accepted', 
                'answer_c' => '<b>C</b>. would accept',
                'answer_d' => '<b>D</b>. wouldn\'t accept',
                'correct_answer' => '<b>A</b>. wouldn\'t have accepted',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau12
            [
                'reading_id' => null,
                'content' => 'Jack asked his sister ______.',
                'answer_a' => '<b>A</b>. where would she go the following day',
                'answer_b' => '<b>B</b>. where you will go tomorrow', 
                'answer_c' => '<b>C</b>. where you have gone tomorrow',
                'answer_d' => '<b>D</b>. where she would go the following day',
                'correct_answer' => '<b>D</b>. where she would go the following day',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau13
            [
                'reading_id' => null,
                'content' => 'The mother told her son _______ so impolitely',
                'answer_a' => '<b>A</b>. didn\'t behave',
                'answer_b' => '<b>B</b>. to behave', 
                'answer_c' => '<b>C</b>. not behave',
                'answer_d' => '<b>D</b>. not to behave',
                'correct_answer' => '<b>D</b>. not to behave',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau14
            [
                'reading_id' => null,
                'content' => 'Eugenie Clark has a wide __________ about cultures of many countries in the world',
                'answer_a' => '<b>A</b>. known',
                'answer_b' => '<b>B</b>. knowing', 
                'answer_c' => '<b>C</b>. knowledge',
                'answer_d' => '<b>D</b>. know',
                'correct_answer' => '<b>C</b>. knowledge',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],

            //Mark the letter A, B, C, or D on your answer sheet to indicate the word or phrase CLOSEST in meaning to the underlined part in the following questions
            //cau15
            [
                'reading_id' => null,
                'content' => 'Whenever problems <b><u>come up</u></b>, we discuss them frankly and find solutions quickly.',
                'answer_a' => '<b>A</b>. arrive',
                'answer_b' => '<b>B</b>. encounter', 
                'answer_c' => '<b>C</b>. happen',
                'answer_d' => '<b>D</b>. clean',
                'correct_answer' => '<b>C</b>. happen',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau16
            [
                'reading_id' => null,
                'content' => 'It was <b><u>obvious</u></b> to everyone that the child had been badly treated.',
                'answer_a' => '<b>A</b>. significant',
                'answer_b' => '<b>B</b>. unclear', 
                'answer_c' => '<b>C</b>. evident',
                'answer_d' => '<b>D</b>. frank',
                'correct_answer' => '<b>C</b>. evident',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],

            //Mark the letter A, B, C, or D on your answer sheet to indicate the most suitable response to complete each of the following exchanges.
            //cau17
            [
                'reading_id' => null,
                'content' => 'Anne: "Make yourself at home". <br> - John: " _______"',
                'answer_a' => '<b>A</b>. That\'s very kind of you. Thank you',
                'answer_b' => '<b>B</b>. Thanks! The same to you!', 
                'answer_c' => '<b>C</b>. Not at all. Don\'t mention it',
                'answer_d' => '<b>D</b>. Yes, can I help you?',
                'correct_answer' => '<b>A</b>. That\'s very kind of you. Thank you',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau18
            [
                'reading_id' => null,
                'content' => 'Kate: "Thank you for the lovely present. " <br> – Peter: " ____________ "',
                'answer_a' => '<b>A</b>. I\'m pleased you like it',
                'answer_b' => '<b>B</b>. Not at all', 
                'answer_c' => '<b>C</b>. Go ahead',
                'answer_d' => '<b>D</b>. come on',
                'correct_answer' => '<b>A</b>. I\'m pleased you like it',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],

            //Mark the letter A, B, C, or D on your answer sheet to indicate the word whose underlined part differs from the other three in pronunciation in each of the following questions.
            //cau19
            [
                'reading_id' => null,
                'content' => null,
                'answer_a' => '<b>A</b>. <b>c</b>arpet',
                'answer_b' => '<b>B</b>. s<b>c</b>hool', 
                'answer_c' => '<b>C</b>. fa<b>c</b>ial',
                'answer_d' => '<b>D</b>. <b>c</b>ontact',
                'correct_answer' => '<b>C</b>. fa<b>c</b>ial',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau20
            [
                'reading_id' => null,
                'content' => null,
                'answer_a' => '<b>A</b>. take<u>s</u>',
                'answer_b' => '<b>B</b>. develop<u>s</u>', 
                'answer_c' => '<b>C</b>. volume<u>s</u>',
                'answer_d' => '<b>D</b>. laugh<u>s</u>',
                'correct_answer' => '<b>C</b>. V',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],

            //Mark the letter A, B, C, or D on your answer sheet to indicate the underlined part that needs correction in each of the following questions.
            //cau21
            [
                'reading_id' => null,
                'content' => 'The <u>basic elements</u> of public-opinion research <u>are</u> interviewers, questionnaires, <u>tabulating</u> equipment, <u>and to sample</u> population.',
                'answer_a' => '<b>A</b>. <u>basic elements</u>',
                'answer_b' => '<b>B</b>. <u>are</u>', 
                'answer_c' => '<b>C</b>. <u>tabulating</u>',
                'answer_d' => '<b>D</b>. <u>and to sample</u>',
                'correct_answer' => '<b>D</b>. <u>and to sample</u>',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau22
            [
                'reading_id' => null,
                'content' => 'She asked <u>why</u> <u>did Mathew look</u> <u>so embarrassed</u> when he <u>saw</u> Carole.',
                'answer_a' => '<b>A</b>. <u>why</u>',
                'answer_b' => '<b>B</b>. <u>did Mathew look</u>', 
                'answer_c' => '<b>C</b>. <u>so embarrassed</u>',
                'answer_d' => '<b>D</b>. <u>saw</u>',
                'correct_answer' => '<b>B</b>. <u>did Mathew look</u>',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau23
            [
                'reading_id' => null,
                'content' => 'Higher education is very <u>importance</u> to national <u>economies</u> and it is also a source of trained and <u>educated</u> personnel for <u>the whole country</u>',
                'answer_a' => '<b>A</b>. <u>importance</u>',
                'answer_b' => '<b>B</b>. <u>economies</u>', 
                'answer_c' => '<b>C</b>. <u>educated</u>',
                'answer_d' => '<b>D</b>. <u>the whole country</u>',
                'correct_answer' => '<b>A</b>. <u>importance</u>',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],

            //Read the following passage and mark the letter A, B, C or D on your answer to indicate the correct word or phrase that best fits each of the numbered blanks.
            //cau24
            [
                'reading_id' => 19,
                'content' => null,
                'answer_a' => '<b>A</b>. from',
                'answer_b' => '<b>B</b>. about', 
                'answer_c' => '<b>C</b>. to',
                'answer_d' => '<b>D</b>. for',
                'correct_answer' => '<b>C</b>. to',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau25
            [
                'reading_id' => 19,
                'content' => null,
                'answer_a' => '<b>A</b>. people',
                'answer_b' => '<b>B</b>. anyone', 
                'answer_c' => '<b>C</b>. someone',
                'answer_d' => '<b>C</b>. nobody',
                'correct_answer' => '<b>D</b>. someone',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau26
            [
                'reading_id' => 19,
                'content' => null,
                'answer_a' => '<b>A</b>. up',
                'answer_b' => '<b>B</b>. away', 
                'answer_c' => '<b>C</b>. on',
                'answer_d' => '<b>D</b>. in',
                'correct_answer' => '<b>B</b>. away',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau27
            [
                'reading_id' => 19,
                'content' => null,
                'answer_a' => '<b>A</b>. survey',
                'answer_b' => '<b>B</b>. questionnaires', 
                'answer_c' => '<b>C</b>. research',
                'answer_d' => '<b>D</b>. studies',
                'correct_answer' => '<b>D</b>. studies',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau28
            [
                'reading_id' => 19,
                'content' => null,
                'answer_a' => '<b>A</b>. like',
                'answer_b' => '<b>B</b>. alike', 
                'answer_c' => '<b>C</b>. as',
                'answer_d' => '<b>D</b>. such as',
                'correct_answer' => '<b>C</b>. as',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],

            //Mark the letter A, B, C, or D on your answer sheet to indicate the word that is OPPOSITE in meaning to the underlined part in the following questions
            //cau29
            [
                'reading_id' => null,
                'content' => 'She decided to remain <b><u>celibate</u></b> and devote her life to helping the homeless and orphans.',
                'answer_a' => '<b>A</b>. divorced',
                'answer_b' => '<b>B</b>. separated', 
                'answer_c' => '<b>C</b>. single',
                'answer_d' => '<b>D</b>. married',
                'correct_answer' => '<b>D</b>. married',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau30
            [
                'reading_id' => null,
                'content' => 'In Western culture, it is <b><u>polite</u></b> to maintain eye contact during conversation.',
                'answer_a' => '<b>A</b>. irresponsible',
                'answer_b' => '<b>B</b>. discourteous', 
                'answer_c' => '<b>C</b>. insecure',
                'answer_d' => '<b>D</b>. informal',
                'correct_answer' => '<b>B</b>. discourteous',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],

            //Mark the letter A, B, C, or D on your answer sheet to indicate the sentence that best combines each pair of sentences in the following questions.
            //cau31
            [
                'reading_id' => null,
                'content' => 'He was able to finish his book. It was because his wife helped him.',
                'answer_a' => '<b>A</b>. If only he had been able to finish his book.',
                'answer_b' => '<b>B</b>. If it weren\'t for his wife\'s help, he couldn\'t have finished his book.', 
                'answer_c' => '<b>C</b>. Without his wife\'s help, he couldn\'t have finished his book.',
                'answer_d' => '<b>D</b>. But for his wife\'s help, he couldn\'t finish his book.',
                'correct_answer' => '<b>C</b>. Without his wife\'s help, he couldn\'t have finished his book.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau32
            [
                'reading_id' => null,
                'content' => 'The basketball team knew they lost the match. They soon started to blame each other.',
                'answer_a' => '<b>A</b>. Hardly had the basketball team known they lost the match when they started to blame each other.',
                'answer_b' => '<b>B</b>. Not only did the basketball team lose the match but they blamed each other as well.', 
                'answer_c' => '<b>C</b>. No sooner had the basketball team started to blame each other than they knew they lost the match.',
                'answer_d' => '<b>D</b>. As soon as they blamed each other, the basketball team knew they lost the match.',
                'correct_answer' => '<b>A</b>. Hardly had the basketball team known they lost the match when they started to blame each other.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],

            //Mark the letter A, B, C, or D on your answer sheet to indicate the sentence that is closest in meaning to each of the following questions.
            //cau33
            [
                'reading_id' => null,
                'content' => 'They believe a single gunman carried out the attack.',
                'answer_a' => '<b>A</b>. The attack\'s is believed to have carried out a single gunman',
                'answer_b' => '<b>B</b>. A single gunman is believed to have carried out the attack', 
                'answer_c' => '<b>C</b>. It is believed to be carried out the attack by a single gunman.',
                'answer_d' => '<b>D</b>. It is believed that the attack has been carried out by a single gunman.',
                'correct_answer' => '<b>B</b>. A single gunman is believed to have carried out the attack',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau34
            [
                'reading_id' => null,
                'content' => '"I\'m sorry. I didn\'t do the homework." said the boy.',
                'answer_a' => '<b>A</b>. The boy admitted not doing the homework.',
                'answer_b' => '<b>B</b>. The boy said that he was sorry and he wouldn\'t do the homework.', 
                'answer_c' => '<b>C</b>. The boy denied not doing the homework.',
                'answer_d' => '<b>D</b>. The boy refused to do the homework.',
                'correct_answer' => '<b>A</b>. The boy admitted not doing the homework.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau35
            [
                'reading_id' => null,
                'content' => 'You can stay in the flat for free as long as you pay the bills.',
                'answer_a' => '<b>A</b>. Whether you pay the bills or stay in the flat, it is free.',
                'answer_b' => '<b>B</b>. Without the bills paid, you can stay in the free flat.', 
                'answer_c' => '<b>C</b>. Unless the flat is free of bills, you cannot stay in it.',
                'answer_d' => '<b>D</b>. Provided you pay the bills, you can stay in the flat for free.',
                'correct_answer' => '<b>D</b>. Provided you pay the bills, you can stay in the flat for free.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            // Reading
            //cau36
            [
                'reading_id' => 20,
                'content' => 'Sixty years ago, most women ____________',
                'answer_a' => '<b>A</b>. went out to work',
                'answer_b' => '<b>B</b>. had no children', 
                'answer_c' => '<b>C</b>. did not do much housework',
                'answer_d' => '<b>D</b>. were housewives',
                'correct_answer' => '<b>D</b>. were housewives',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau37
            [
                'reading_id' => 20,
                'content' => 'Nowadays, there are __________.',
                'answer_a' => '<b>A</b>. more women going out to work than before',
                'answer_b' => '<b>B</b>. more and more women staying with the children all day', 
                'answer_c' => '<b>C</b>. more work outside the home than before',
                'answer_d' => '<b>D</b>. more housewives than before',
                'correct_answer' => '<b>A</b>. more women going out to work than before',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau38
            [
                'reading_id' => 20,
                'content' => 'The word <b><u>"laundry"</u></b> in paragraph 2 is closest in meaning to ___________',
                'answer_a' => '<b>A</b>. tidying up',
                'answer_b' => '<b>B</b>. cooking and washing up', 
                'answer_c' => '<b>C</b>. washing and ironing',
                'answer_d' => '<b>D</b>. shopping',
                'correct_answer' => '<b>C</b>. washing and ironing',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau39
            [
                'reading_id' => 20,
                'content' => 'It can be inferred from paragraph 4 that__________.',
                'answer_a' => '<b>A</b>. couples with low-paid jobs can\'t afford the cost of a babysitter or a day-care center',
                'answer_b' => '<b>B</b>. grandparents can help care the children in a regular way', 
                'answer_c' => '<b>C</b>. all couples with jobs can pay for help from a babysitter or a day-care center',
                'answer_d' => '<b>D</b>. in the past, grandparents did not help the couples with child care',
                'correct_answer' => '<b>A</b>. couples with low-paid jobs can\'t afford the cost of a babysitter or a day-care center',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau40
            [
                'reading_id' => 20,
                'content' => 'The word <b><u>"they"</u></b> in paragraph 5 refers to _______________',
                'answer_a' => '<b>A</b>. husbands who stop working to stay with the children',
                'answer_b' => '<b>B</b>. fathers who spend more time with their children', 
                'answer_c' => '<b>C</b>. parents who work part-time',
                'answer_d' => '<b>D</b>. children who spend more time with fathers than mothers',
                'correct_answer' => '<b>A</b>. husbands who stop working to stay with the children',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau41
            [
                'reading_id' => 20,
                'content' => 'The changes in the American home mentioned in this passage may ___________',
                'answer_a' => '<b>A</b>. help families',
                'answer_b' => '<b>B</b>. not happen', 
                'answer_c' => '<b>C</b>. cause problems for a marriage',
                'answer_d' => '<b>D</b>. not change the children at all',
                'correct_answer' => '<b>A</b>. help families',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau42
            [
                'reading_id' => 20,
                'content' => 'This article is about ________',
                'answer_a' => '<b>A</b>. American men as househusbands',
                'answer_b' => '<b>B</b>. housewives in America', 
                'answer_c' => '<b>C</b>. how more American women are working',
                'answer_d' => '<b>D</b>. how family life in America is changing',
                'correct_answer' => '<b>D</b>. how family life in America is changing',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau43
            [
                'reading_id' => 21,
                'content' => 'We sometimes think of writing as more real than speech because ______.',
                'answer_a' => '<b>A</b>. writing is secondary to language',
                'answer_b' => '<b>B</b>. human beings have been writing for at least 5000 years', 
                'answer_c' => '<b>C</b>. it has become very important in our culture',
                'answer_d' => '<b>D</b>. people have been writing since there have been human beings',
                'correct_answer' => '<b>C</b>. it has become very important in our culture',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau44
            [
                'reading_id' => 21,
                'content' => 'The author of the passage argues that ______.',
                'answer_a' => '<b>A</b>. speech is more basic to language than writing',
                'answer_b' => '<b>B</b>. writing has become too important in today\'s society', 
                'answer_c' => '<b>C</b>. everyone who learns to speak must learn to write',
                'answer_d' => '<b>D</b>. all languages should have a written form',
                'correct_answer' => '<b>A</b>. speech is more basic to language than writing',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau45
            [
                'reading_id' => 21,
                'content' => 'According to the passage, writing ______.',
                'answer_a' => '<b>A</b>. is represented perfectly by speech',
                'answer_b' => '<b>B</b>. represents speech, but not perfectly', 
                'answer_c' => '<b>C</b>. developed from imperfect speech',
                'answer_d' => '<b>D</b>. is imperfect, but less so than speech',
                'correct_answer' => '<b>B</b>. represents speech, but not perfectly',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau46
            [
                'reading_id' => 21,
                'content' => 'Normal human beings ______.',
                'answer_a' => '<b>A</b>. learn to talk after learning to write',
                'answer_b' => '<b>B</b>. learn to write before learning to talk', 
                'answer_c' => '<b>C</b>. learn to write and to talk at the same time',
                'answer_d' => '<b>D</b>. learn to talk before learning to write',
                'correct_answer' => '<b>D</b>. learn to talk before learning to write',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau47
            [
                'reading_id' => 21,
                'content' => 'Learning to write is ______.',
                'answer_a' => '<b>A</b>. easy',
                'answer_b' => '<b>B</b>. too difficult', 
                'answer_c' => '<b>C</b>. not easy',
                'answer_d' => '<b>D</b>. very easy',
                'correct_answer' => '<b>C</b>. not easy',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau48
            [
                'reading_id' => 21,
                'content' => 'In order to show that learning to write requires effort, the author gives the example of _____.',
                'answer_a' => '<b>A</b>. people who learn the rudiments of speech',
                'answer_b' => '<b>B</b>. severely handicapped children', 
                'answer_c' => '<b>C</b>. intelligent people who couldn\'t write',
                'answer_d' => '<b>D</b>. people who speak many languages',
                'correct_answer' => '<b>C</b>. intelligent people who couldn\'t write',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau49
            [
                'reading_id' => 21,
                'content' => 'In the author\'s judgment, ______.',
                'answer_a' => '<b>A</b>. writing has more advantages than speech',
                'answer_b' => '<b>B</b>. writing is more real than speech', 
                'answer_c' => '<b>C</b>. speech conveys ideas less accurately than writing does',
                'answer_d' => '<b>D</b>. speech is essential but writing has important benefits',
                'correct_answer' => '<b>D</b>. speech is essential but writing has important benefits',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau50
            [
                'reading_id' => 21,
                'content' => 'The word <b><u>"advantage"</u></b> in the last paragraph most closely means ______.',
                'answer_a' => '<b>A</b>. "rudiments"',
                'answer_b' => '<b>B</b>. "skill"', 
                'answer_c' => '<b>C</b>. "domination"',
                'answer_d' => '<b>D</b>. "benefit"',
                'correct_answer' => '<b>D</b>. "benefit"',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //thi thu 2020 de 2
            [
                'reading_id' => null,
                'content' => null,
                'answer_a' => '<b>A</b>. cri<u>ed</u>',
                'answer_b' => '<b>B</b>. publish<u>ed</u>', 
                'answer_c' => '<b>C</b>. order<u>ed</u>',
                'answer_d' => '<b>D</b>. spray<u>ed</u>',
                'correct_answer' => '<b>B</b>. publish<u>ed</u>',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau2
            [
                'reading_id' => null,
                'content' => null,
                'answer_a' => '<b>A</b>. hous<u>es</u>',
                'answer_b' => '<b>B</b>. servic<u>es</u>', 
                'answer_c' => '<b>C</b>. passag<u>es</u>',
                'answer_d' => '<b>D</b>. techniqu<u>es</u>',
                'correct_answer' => '<b>D</b>. techniqu<u>es</u>',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //Mark the letter A, B, C, D on your answer sheet to indicate the word that differs from the other three in the position of primary stress in each of the following question.
            //cau3
            [
                'reading_id' => null,
                'content' => null,
                'answer_a' => '<b>A</b>. private',
                'answer_b' => '<b>B</b>. provide', 
                'answer_c' => '<b>C</b>. arrange',
                'answer_d' => '<b>D</b>. advise',
                'correct_answer' => '<b>A</b>. private',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau4
            [
                'reading_id' => null,
                'content' => null,
                'answer_a' => '<b>A</b>. particular',
                'answer_b' => '<b>B</b>. significant', 
                'answer_c' => '<b>C</b>. satisfaction',
                'answer_d' => '<b>D</b>. collaborate',
                'correct_answer' => '<b>C</b>. satisfaction',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //Mark the letter A, B, C, D on your answer sheet to indicate the correct answer to each of the following questions.
            //cau5
            [
                'reading_id' => null,
                'content' => 'She has been playing piano since she was 10 years of age.',
                'answer_a' => '<b>A</b>. a',
                'answer_b' => '<b>B</b>. an', 
                'answer_c' => '<b>C</b>. the',
                'answer_d' => '<b>D</b>. X (no article)',
                'correct_answer' => '<b>C</b>. the',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau6
            [
                'reading_id' => null,
                'content' => 'You many good choices for the future if you are admitted to a famous university.',
                'answer_a' => '<b>A</b>. will have',
                'answer_b' => '<b>B</b>. had', 
                'answer_c' => '<b>C</b>. would have',
                'answer_d' => '<b>D</b>. would have had',
                'correct_answer' => '<b>A</b>. will have',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau7
            [
                'reading_id' => null,
                'content' => 'Bruce was not promoted to a higher position________he was a devoted worker.',
                'answer_a' => '<b>A</b>. despite',
                'answer_b' => '<b>B</b>. in spite of', 
                'answer_c' => '<b>C</b>. although',
                'answer_d' => '<b>D</b>. no matter how',
                'correct_answer' => '<b>C</b>. although',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau8
            [
                'reading_id' => null,
                'content' => 'The teacher criticized me________making too many stupid mistakes in the essay.',
                'answer_a' => '<b>A</b>. on',
                'answer_b' => '<b>B</b>. for', 
                'answer_c' => '<b>C</b>. about',
                'answer_d' => '<b>D</b>. by',
                'correct_answer' => '<b>B</b>. for',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau9
            [
                'reading_id' => null,
                'content' => ' ________the destination, everyone felt a relief.',
                'answer_a' => '<b>A</b>. Reached',
                'answer_b' => '<b>B</b>. When reached', 
                'answer_c' => '<b>C</b>. On reaching',
                'answer_d' => '<b>D</b>. Having been reached',
                'correct_answer' => '<b>C</b>. On reaching',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau10
            [
                'reading_id' => null,
                'content' => 'We noticed a very sneaky man while we_________at the checkout.',
                'answer_a' => '<b>A</b>. stood',
                'answer_b' => '<b>B</b>. are standing', 
                'answer_c' => '<b>C</b>. had stood',
                'answer_d' => '<b>D</b>. were standing',
                'correct_answer' => '<b>D</b>. were standing',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau11
            [
                'reading_id' => null,
                'content' => '__________a good chance, don\'t let it slip away!',
                'answer_a' => '<b>A</b>. If given',
                'answer_b' => '<b>B</b>. You are given', 
                'answer_c' => '<b>C</b>. If you give',
                'answer_d' => '<b>D</b>. Being given',
                'correct_answer' => '<b>A</b>. If given',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau12
            [
                'reading_id' => null,
                'content' => 'The stockbroker denied of the secret business deal.',
                'answer_a' => '<b>A</b>. having informed',
                'answer_b' => '<b>B</b>. to have been informed', 
                'answer_c' => '<b>C</b>. having been informed',
                'answer_d' => '<b>D</b>. to have informed',
                'correct_answer' => '<b>C</b>. having been informed',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],

            //Mark the letter A, B, C, or D on your answer sheet to indicate the word that is CLOSEST in meaning to the underlined part in each of the following questions.
            //cau13
            [
                'reading_id' => null,
                'content' => 'The helicopter carrier is <b><u>indispensable</u></b> in marine operations against sea or enemies.',
                'answer_a' => '<b>A</b>. unique',
                'answer_b' => '<b>B</b>. novel', 
                'answer_c' => '<b>C</b>. exotic',
                'answer_d' => '<b>D</b>. vital',
                'correct_answer' => '<b>D</b>. vital',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau14
            [
                'reading_id' => null,
                'content' => 'Researchers warn of the <b><u>impending</u></b> extinction of many species of plants and animals.',
                'answer_a' => '<b>A</b>. inevitable',
                'answer_b' => '<b>B</b>. imminent', 
                'answer_c' => '<b>C</b>. formidable',
                'answer_d' => '<b>D</b>. absolute',
                'correct_answer' => '<b>B</b>. imminent',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],

            //Mark the letter A, B, C, or D on your answer sheet to indicate the word that is OPPOSITE in meaning to the underlined part in each of the following questions.
            //cau15
            [
                'reading_id' => null,
                'content' => 'It was a <b><u>heartfelt</u></b> confession.',
                'answer_a' => '<b>A</b>. loving',
                'answer_b' => '<b>B</b>. insincere', 
                'answer_c' => '<b>C</b>. unhealthy',
                'answer_d' => '<b>D</b>. humorous',
                'correct_answer' => '<b>B</b>. insincere',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau16
            [
                'reading_id' => null,
                'content' => 'Is he looking for a temporary or a <b><u>permanent</u></b> contract?',
                'answer_a' => '<b>A</b>. fleeting',
                'answer_b' => '<b>B</b>. fierce', 
                'answer_c' => '<b>C</b>. stable',
                'answer_d' => '<b>D</b>. loose',
                'correct_answer' => '<b>A</b>. fleeting',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //Mark the letter A, B, C, or D on your answer sheet to show the underlined part that needs correction
            //cau17
            [
                'reading_id' => null,
                'content' => 'It is <u>time</u> the management <u>do</u> something to support <u>the unemployed</u> to find <u>some jobs</u>.',
                'answer_a' => '<b>A</b>. fleeti<u>time</u>ng',
                'answer_b' => '<b>B</b>. <u>do</u>', 
                'answer_c' => '<b>C</b>. <u>the unemployed</u>',
                'answer_d' => '<b>D</b>. <u>some jobs</u>',
                'correct_answer' => '<b>B</b>. <u>do</u>',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau18
            [
                'reading_id' => null,
                'content' => 'I enjoy <u>reading</u> the editorial <u>that</u> you <u>told</u> me about <u>it</u> yesterday.',
                'answer_a' => '<b>A</b>. <u>reading</u>',
                'answer_b' => '<b>B</b>. <u>that</u>', 
                'answer_c' => '<b>C</b>. <u>told</u>',
                'answer_d' => '<b>D</b>. <u>it</u>',
                'correct_answer' => '<b>D</b>. <u>it</u>',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau19
            [
                'reading_id' => null,
                'content' => 'Students <u>suppose</u> to read <u>all the problems</u> carefully and find <u>out</u> the solution to <u>them</u>.',
                'answer_a' => '<b>A</b>. <u>suppose</u>',
                'answer_b' => '<b>B</b>. <u>all the problems</u>', 
                'answer_c' => '<b>C</b>. <u>out</u>',
                'answer_d' => '<b>D</b>. <u>them</u>',
                'correct_answer' => '<b>A</b>. <u>suppose</u>',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],        
            //cau20
            [
                'reading_id' => 22,
                'content' => 'What is the main topic of the passage?',
                'answer_a' => '<b>A</b>. How to reduce garbage disposal',
                'answer_b' => '<b>B</b>. What people often understand about the term "recycle"', 
                'answer_c' => '<b>C</b>. What is involved in the recycling movement',
                'answer_d' => '<b>D</b>. How to live sensitively to the environment',
                'correct_answer' => '<b>C</b>. What is involved in the recycling movement',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau21
            [
                'reading_id' => 22,
                'content' => 'People can do the following to reduce waste EXCEPT',
                'answer_a' => '<b>A</b>. buy high-quality product',
                'answer_b' => '<b>B</b>. buy simply-wrapped things', 
                'answer_c' => '<b>C</b>. reuse cups',
                'answer_d' => '<b>D</b>. buy fewer hamburgers',
                'correct_answer' => '<b>D</b>. buy fewer hamburgers',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau22
            [
                'reading_id' => 22,
                'content' => 'Why is it a waste when customers buy low-quality products?',
                'answer_a' => '<b>A</b>. Because people will soon throw them away.',
                'answer_b' => '<b>B</b>. Because they have to be repaired many times.', 
                'answer_c' => '<b>C</b>. Because customers change their ideas all the time.',
                'answer_d' => '<b>D</b>. Because they produce less energy.',
                'correct_answer' => '<b>A</b>. Because people will soon throw them away.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau23
            [
                'reading_id' => 22,
                'content' => 'What best describes the process of reuse?',
                'answer_a' => '<b>A</b>. The bottles are collected, washed, returned and filled again.',
                'answer_b' => '<b>B</b>. The bottles are filled again after being returned, collected and washed.', 
                'answer_c' => '<b>C</b>. The bottles are washed, retuned, filled again and collected.',
                'answer_d' => '<b>D</b>. The bottles are collected, returned filled again and washed.',
                'correct_answer' => '<b>B</b>. The bottles are filled again after being returned, collected and washed.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau24
            [
                'reading_id' => 22,
                'content' => 'What are the two things mentioned as examples of recycling?',
                'answer_a' => '<b>A</b>. Aluminum cans and plastic wrappings.',
                'answer_b' => '<b>B</b>. Hamburger wrappings and spent motor oil.', 
                'answer_c' => '<b>C</b>. Aluminum cans and spent motor oil.',
                'answer_d' => '<b>D</b>. TV sets and aluminum cans.',
                'correct_answer' => '<b>C</b>. Aluminum cans and spent motor oil.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau25
            [
                'reading_id' => 23,
                'content' => null,
                'answer_a' => '<b>A</b>. alternative',
                'answer_b' => '<b>B</b>. alternate', 
                'answer_c' => '<b>C</b>. alteration',
                'answer_d' => '<b>D</b>. alternation',
                'correct_answer' => '<b>A</b>. alternative',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau26
            [
                'reading_id' => 23,
                'content' => null,
                'answer_a' => '<b>A</b>. also',
                'answer_b' => '<b>B</b>. for', 
                'answer_c' => '<b>C</b>. not',
                'answer_d' => '<b>D</b>. all',
                'correct_answer' => '<b>A</b>. also',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau27
            [
                'reading_id' => 23,
                'content' => null,
                'answer_a' => '<b>A</b>. In spite of',
                'answer_b' => '<b>B</b>. On account of', 
                'answer_c' => '<b>C</b>. In favour of',
                'answer_d' => '<b>D</b>. Instead of',
                'correct_answer' => '<b>D</b>. Instead of',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau28
            [
                'reading_id' => 23,
                'content' => null,
                'answer_a' => '<b>A</b>. resource',
                'answer_b' => '<b>B</b>. source', 
                'answer_c' => '<b>C</b>. matter',
                'answer_d' => '<b>D</b>. substance',
                'correct_answer' => '<b>A</b>. resource',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau29
            [
                'reading_id' => 23,
                'content' => null,
                'answer_a' => '<b>A</b>. of',
                'answer_b' => '<b>B</b>. to', 
                'answer_c' => '<b>C</b>. on',
                'answer_d' => '<b>D</b>. in',
                'correct_answer' => '<b>C</b>. on',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau30
            [
                'reading_id' => 24,
                'content' => 'What does the passage mainly discuss?',
                'answer_a' => '<b>A</b>. The economic impact of air pollution.',
                'answer_b' => '<b>B</b>. What constitutes an air pollutant.', 
                'answer_c' => '<b>C</b>. How much harm air pollutants can cause.',
                'answer_d' => '<b>D</b>. The effects of compounds added to the atmosphere.',
                'correct_answer' => '<b>B</b>. What constitutes an air pollutant.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau31
            [
                'reading_id' => 24,
                'content' => 'It can be inferred from the first paragraph that ___________.',
                'answer_a' => '<b>A</b>. water vapor is an air pollutant in localized areas',
                'answer_b' => '<b>B</b>. most air pollutants today can be seen or smelled', 
                'answer_c' => '<b>C</b>. the definition of air pollution will continue to change',
                'answer_d' => '<b>D</b>. a substance becomes an air pollutant only in cities',
                'correct_answer' => '<b>C</b>. the definition of air pollution will continue to change',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau32
            [
                'reading_id' => 24,
                'content' => 'For which of the following reasons can natural pollutants play an important role in controlling air pollution?',
                'answer_a' => '<b>A</b>. They function as part of a purification process.',
                'answer_b' => '<b>B</b>. They occur in greater quantities than other pollutants.', 
                'answer_c' => '<b>C</b>. They are less harmful to living beings than other pollutants.',
                'answer_d' => '<b>D</b>. They have existed since the Earth developed.',
                'correct_answer' => '<b>A</b>. They function as part of a purification process.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau33
            [
                'reading_id' => 24,
                'content' => 'According to the passage, human-generated air pollution in localized regions___________.',
                'answer_a' => '<b>A</b>. can be dwarfed by nature\'s output of pollutants',
                'answer_b' => '<b>B</b>. can overwhelm the natural system that removes pollutants', 
                'answer_c' => '<b>C</b>. will damage areas outside of the localized regions',
                'answer_d' => '<b>D</b>. will react harmfully with natural pollutants',
                'correct_answer' => '<b>B</b>. can overwhelm the natural system that removes pollutants',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau34
            [
                'reading_id' => 24,
                'content' => 'The word <b>"localized"</b> in the third paragraph is closest in meaning to________.',
                'answer_a' => '<b>A</b>. specified',
                'answer_b' => '<b>B</b>. circled', 
                'answer_c' => '<b>C</b>. surrounded',
                'answer_d' => '<b>D</b>. encircled',
                'correct_answer' => '<b>A</b>. specified',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau35
            [
                'reading_id' => 24,
                'content' => 'According to the passage, the numerical value of the concentration level of a substance is only useful if ________.',
                'answer_a' => '<b>A</b>. he other substances in the area are known',
                'answer_b' => '<b>B</b>. it is in a localized area', 
                'answer_c' => '<b>C</b>. the natural level is also known',
                'answer_d' => '<b>D</b>. it can be calculated quickly',
                'correct_answer' => '<b>C</b>. the natural level is also known',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau36
            [
                'reading_id' => 24,
                'content' => 'The word <b>"detectable"</b> in the third paragraph is closest in meaning to____.',
                'answer_a' => '<b>A</b>. discernible',
                'answer_b' => '<b>B</b>. gradual', 
                'answer_c' => '<b>C</b>. unobservable',
                'answer_d' => '<b>D</b>. impossible',
                'correct_answer' => '<b>A</b>. discernible',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau37
            [
                'reading_id' => 24,
                'content' => 'Which of the following is best supported by the passage?',
                'answer_a' => '<b>A</b>. To effectively control pollution, local government should regularly review their air pollution laws.',
                'answer_b' => '<b>B</b>. One of the most important steps in preserving natural lands is to better enforce air pollution laws.', 
                'answer_c' => '<b>C</b>. Scientists should be consulted in order to establish uniform limits for all air pollutants.',
                'answer_d' => '<b>D</b>. Human activities have been effective in reducing air pollution.',
                'correct_answer' => '<b>D</b>. Human activities have been effective in reducing air pollution.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //Mark the letter A, B, C, or D on your answer sheet to indicate the correct answer to each of the following questions.
            //cau38
            [
                'reading_id' => null,
                'content' => 'A trust worker was discovered to have _______ confidential information to a rival corporation.',
                'answer_a' => '<b>A</b>. stolen',
                'answer_b' => '<b>B</b>. spread', 
                'answer_c' => '<b>C</b>. rumored',
                'answer_d' => '<b>D</b>. leaked',
                'correct_answer' => '<b>D</b>. leaked',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau39
            [
                'reading_id' => null,
                'content' => 'Poor supervision brought the firm to _______ of collapse.',
                'answer_a' => '<b>A</b>. the edge',
                'answer_b' => '<b>B</b>. the foot', 
                'answer_c' => '<b>C</b>. the ring',
                'answer_d' => '<b>D</b>. the brink',
                'correct_answer' => '<b>D</b>. the brink',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau40
            [
                'reading_id' => null,
                'content' => 'It never _______ his mind that his badly behaved manner would be discovered.',
                'answer_a' => '<b>A</b>. crossed',
                'answer_b' => '<b>B</b>. came', 
                'answer_c' => '<b>C</b>. spunk',
                'answer_d' => '<b>D</b>. passed',
                'correct_answer' => '<b>A</b>. crossed',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau41
            [
                'reading_id' => null,
                'content' => 'Tim finds mending old clothes incredibly _______ , that\'s why he always asks his mother to do it for him.',
                'answer_a' => '<b>A</b>. hilarious',
                'answer_b' => '<b>B</b>. tedious', 
                'answer_c' => '<b>C</b>. funny',
                'answer_d' => '<b>D</b>. recreational',
                'correct_answer' => '<b>B</b>. tedious',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau42
            [
                'reading_id' => null,
                'content' => 'As Tim was _______ of the modification in the schedule, he arrived an hour late for the meeting.',
                'answer_a' => '<b>A</b>. unaware',
                'answer_b' => '<b>B</b>. unconscious', 
                'answer_c' => '<b>C</b>. unable',
                'answer_d' => '<b>D</b>. unreasonable',
                'correct_answer' => '<b>A</b>. unaware',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau43
            [
                'reading_id' => null,
                'content' => 'Despite a lot of difficulties, the Star City Project will go ______.',
                'answer_a' => '<b>A</b>. backward',
                'answer_b' => '<b>B</b>. forward', 
                'answer_c' => '<b>C</b>. advance',
                'answer_d' => '<b>D</b>. ahead',
                'correct_answer' => '<b>D</b>. ahead',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],

            //Mark the letter A, B, C, or D on your answer sheet to indicate the most suitable response to complete each of the following exchanges.
            //cau44
            [
                'reading_id' => null,
                'content' => '– "Thanks for the lovely party." – " ___________."',
                'answer_a' => '<b>A</b>. Yes, it\'s really great',
                'answer_b' => '<b>B</b>. No, it\'s not good', 
                'answer_c' => '<b>C</b>. Oh, that\'s right',
                'answer_d' => '<b>D</b>. I\'m glad you enjoyed it',
                'correct_answer' => '<b>D</b>. I\'m glad you enjoyed it',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau45
            [
                'reading_id' => null,
                'content' => '– "What do you usually do at weekend?" – " _________."',
                'answer_a' => '<b>A</b>. I usually drive to work',
                'answer_b' => '<b>B</b>. I will sleep all day.', 
                'answer_c' => '<b>C</b>. I usually do not much',
                'answer_d' => '<b>D</b>. Nothing much. I always sleep until noon',
                'correct_answer' => '<b>D</b>. Nothing much. I always sleep until noon',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //Mark the letter A, B, C, or D on your answer sheet to indicate the sentence that best combines each pair of sentences in the following questions.
            //cau46
            [
                'reading_id' => null,
                'content' => 'I had never met Rose before. However, I recognized her from a picture.',
                'answer_a' => '<b>A</b>. Although I had never met Rose before, I recognized her from a picture.',
                'answer_b' => '<b>B</b>. I recognized her from a picture before I had never met Rose.', 
                'answer_c' => '<b>C</b>. Although I had never met Rose before but I recognized her from a picture.',
                'answer_d' => '<b>D</b>. After I had met Rose, I recognized her from a picture.',
                'correct_answer' => '<b>A</b>. Although I had never met Rose before, I recognized her from a picture.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau47
            [
                'reading_id' => null,
                'content' => 'The human brain is 8 times the size of a monkey\'s. It weighs about 1,400 grams.',
                'answer_a' => '<b>A</b>. The size of human brain is 8 times that of a monkey\'s which is about 1,400 grams weigh.',
                'answer_b' => '<b>B</b>. The human brain, which weighs about 1,400 grams, is 8 times the size of a monkey\'s.', 
                'answer_c' => '<b>C</b>. The size of a monkey\'s brain is 1,400 grams, 8 times that of the human one.',
                'answer_d' => '<b>D</b>. The weight of a monkey\'s brain is 1,400 grams, 8-fold than that of the human one.',
                'correct_answer' => '<b>B</b>. The human brain, which weighs about 1,400 grams, is 8 times the size of a monkey\'s.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],

            //Mark the letter A, B, C, or D on your answer sheet to indicate the sentence that is closest in meaning to each of the following questions.
            //cau48
            [
                'reading_id' => null,
                'content' => 'Tom has the ability to be a professional musician, but he\'s too lazy to practice.',
                'answer_a' => '<b>A</b>. Tom is talented but he\'ll never be a professional musician as he doesn\'t practice.',
                'answer_b' => '<b>B</b>. As a professional musician Tom is not lazy to practice music lessons.', 
                'answer_c' => '<b>C</b>. Tom is able to practice music lessons professionally though he is lazy.',
                'answer_d' => '<b>D</b>. Though practicing lazily, Tom is a professional musician.',
                'correct_answer' => '<b>A</b>. Tom is talented but he\'ll never be a professional musician as he doesn\'t practice.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau49
            [
                'reading_id' => null,
                'content' => 'Tim broke his arm and couldn\'t battle in the final.',
                'answer_a' => '<b>A</b>. Tim couldn\'t battle in the final due to his broken arm.',
                'answer_b' => '<b>B</b>. If Tim hadn\'t broken his arm, he could battle in the final now', 
                'answer_c' => '<b>C</b>. If Tim didn\'t break his arm, he could battle in the final.',
                'answer_d' => '<b>D</b>. But for his broken arm, Tim couldn\'t have played in the final.',
                'correct_answer' => '<b>A</b>. Tim couldn\'t battle in the final due to his broken arm.',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],
            //cau50
            [
                'reading_id' => null,
                'content' => 'The teacher couldn\'t stand my brother\'s manner',
                'answer_a' => '<b>A</b>. The teacher found my brother\'s manner. intolerant',
                'answer_b' => '<b>B</b>. The teacher found my brother\'s manner intolerable', 
                'answer_c' => '<b>C</b>. The teacher was tolerant towards my brother\'s manner',
                'answer_d' => '<b>D</b>. My brother\'s behavior was not manner',
                'correct_answer' => '<b>B</b>. The teacher found my brother\'s manner intolerable',
                'created_at' => Carbon::now(),
                'update_at' => Carbon::now()
            ],     
        ];

        \DB::table('questions')->insert($data);
    }
}
