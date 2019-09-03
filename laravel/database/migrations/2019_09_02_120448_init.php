<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Init extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table)
        {
          $table->increments('id');
          $table->string('first_name');
          $table->string('last_name');
          $table->string('image');
          $table->mediumText('description');
        });

        DB::table('profiles')->insert(
          [
            'id' => NULL,
            'first_name' => 'Angelina',
            'last_name' => 'Jolie',
            'image' => 'https://ia.media-imdb.com/images/M/MV5BODg3MzYwMjE4N15BMl5BanBnXkFtZTcwMjU5NzAzNw@@._V1_UY317_CR22,0,214,317_AL_.jpg',
            'description' => 'Angelina Jolie is an Oscar-winning actress who became popular after playing the title role in the "Lara Croft" blockbuster movies, as well as Mr. & Mrs. Smith (2005), Wanted: Choisis ton destin (2008), Salt (2010) and Maléfique (2014). Off-screen, Jolie has become prominently involved in international charity projects, especially those involving refugees. She often appears on many "most beautiful women" lists, and she has a personal life that is avidly covered by the tabloid press.'
          ]);

        DB::table('profiles')->insert(
          [
            'id' => NULL,
            'first_name' => 'Beyoncé',
            'last_name' => 'Knowles',
            'image' => 'https://ia.media-imdb.com/images/M/MV5BMjMxMzg3MDI5NV5BMl5BanBnXkFtZTcwOTAxODc0Ng@@._V1_UY317_CR31,0,214,317_AL_.jpg',
            'description' => 'Beyoncé was born in Houston, Texas. Her father, Mathew Knowles, manages Destiny\'s Child. Her mother, Tina Knowles (née Celestine Ann Beyincé), designs their glittering costumes. Solange Knowles, her sister (they\'re about 5 years apart), has released her debut album. She dances with her big sister during DC-3 concerts. Beyoncé is of African-American and Creole descent.\r\n\r\nShe and her group were discovered by Whitney Houston. One of her favorite songs is "Lovefool" by The Cardigans. Her favorite item of clothing is a pair of path work metallic boots. She writes & produces many of the group\'s songs, including smash hits "Jumpin Jumpin", "Bootylicious", "Nasty Girl", "Independent Women", "Happy Face" and "Apple Pie a la mode".'
          ]);

        DB::table('profiles')->insert(
          [
            'id' => NULL,
            'first_name' => 'Jude',
            'last_name' => 'Law',
            'image' => 'https://ia.media-imdb.com/images/M/MV5BMTMwOTg5NTQ3NV5BMl5BanBnXkFtZTcwNzM3MDAzNQ@@._V1_UY317_CR6,0,214,317_AL_.jpg',
            'description' => 'Jude Law is a talented and versatile actor. Law has been nominated for two Academy Awards and continues to build a prolific body of work that spans from early successes such as Bienvenue à Gattaca (1997) and Le talentueux Mr. Ripley (1999) to more recent turns as Dr. John Watson in Sherlock Holmes (2009) and Sherlock Holmes: Jeu d\'ombres (2011), as Hugo\'s father in Hugo Cabret (2011) and in the titular role in Dom Hemingway (2013).\r\n\r\nDavid Jude Law was born on December 29, 1972 in Lewisham, London, England, to Margaret Anne (Heyworth) and Peter Robert Law, both of whom taught at comprehensive schools; his father later became a headmaster. Law has said that he was named after both the book Jude the Obscure and the song Hey Jude.'
          ]);

        DB::table('profiles')->insert(
          [
            'id' => NULL,
            'first_name' => 'Jennifer',
            'last_name' => 'Aniston',
            'image' => 'https://ia.media-imdb.com/images/M/MV5BNjk1MjIxNjUxNF5BMl5BanBnXkFtZTcwODk2NzM4Mg@@._V1_UY317_CR3,0,214,317_AL_.jpg',
            'description' => 'Jennifer Aniston was born in Sherman Oaks, California, to actors John Aniston and Nancy Dow. Her father is Greek, and her mother is of English, Irish, Scottish, and Italian descent. Jennifer spent a year of her childhood living in Greece with her family. Her family then relocated to New York City where her parents divorced when she was 9. Jennifer was raised by her mother and her father landed a role, as "Victor Kiriakis", on the daytime soap Des jours et des vies (1965). Jennifer had her first taste of acting at age 11 when she joined the Rudolf Steiner School\'s drama club. It was also at the Rudolf Steiner School that she developed her passion for art. She began her professional training as a drama student at New York\'s School of Performing Arts, aka the "Fame" school. It was a division of Fiorello H. LaGuardia High School of Music and the Arts. In 1987, after graduation, she appeared in such Off-Broadway productions as "For Dear Life" and "Dancing on Checker\'s Grave". In 1989, she landed her first television role, as a series regular on Molloy (1989). She also appeared in The Edge (1992), Ferris Bueller (1990), and had a recurring part on Herman\'s Head (1991). By 1993, she was floundering. Then, in 1994, a pilot called "Friends Like These" came along. Originally asked to audition for the role of "Monica", Aniston refused and auditioned for the role of "Rachel Green", the suburban princess turned coffee peddler. With the success of the series Friends (1994), Jennifer has become famous and sought-after as she turns her fame into movie roles during the series hiatus.'
          ]);

        DB::table('profiles')->insert(
          [
            'id' => NULL,
            'first_name' => 'Leonardo',
            'last_name' => 'DiCaprio',
            'image' => 'https://ia.media-imdb.com/images/M/MV5BMjI0MTg3MzI0M15BMl5BanBnXkFtZTcwMzQyODU2Mw@@._V1_UY317_CR10,0,214,317_AL_.jpg',
            'description' => 'Few actors in the world have had a career quite as diverse as Leonardo DiCaprio\'s. DiCaprio has gone from relatively humble beginnings, as a supporting cast member of the sitcom Quoi de neuf, docteur? (1985) and low budget horror movies, such as Critters 3 (1991), to a major teenage heartthrob in the 1990s, as the hunky lead actor in movies such asu Roméo + Juliette (1996) and Titanic (1997), to then become a leading man in Hollywood blockbusters, made by internationally renowned directors such as Martin Scorsese and Christopher Nolan.'
          ]);

        DB::table('profiles')->insert(
          [
            'id' => NULL,
            'first_name' => 'Megan',
            'last_name' => 'Fox',
            'image' => 'https://ia.media-imdb.com/images/M/MV5BMTc5MjgyMzk4NF5BMl5BanBnXkFtZTcwODk2OTM4Mg@@._V1_UY317_CR4,0,214,317_AL_.jpg',
            'description' => 'Megan Denise Fox was born in Rockwood, Tennessee, to Gloria Darlene (Cisson) and Franklin Thomas Fox, a parole officer. Megan began her training in drama and dance at age 5 and, at age 10, moved to St. Petersburg, Florida where she continued her training and finished school. Megan began acting and modeling at age 13 after winning several awards at the 1999 American Modeling and Talent Convention in Hilton Head, South Carolina. At age 17, she tested out of school using correspondence and eventually moved to Los Angeles, California. Megan made her film debut as Brianna Wallace in the Mary-Kate Olsen and Ashley Olsen film Vacances sous les tropiques (2001). Her best known roles are as Sam Witwicky\'s love interest Mikaela Banes in the first two installments of the Transformers series, Transformers (2007) and Transformers - La revanche (2009), and as April O\'Neil in the film reboot of Ninja Turtles (2014).'
          ]);

        DB::table('profiles')->insert(
          [
            'id' => NULL,
            'first_name' => 'Nicole',
            'last_name' => 'Kidman',
            'image' => 'https://ia.media-imdb.com/images/M/MV5BMTk1MjM5NDg4MF5BMl5BanBnXkFtZTcwNDg1OTQ4Nw@@._V1_UY317_CR10,0,214,317_AL_.jpg',
            'description' => 'Elegant redhead Nicole Kidman, known as one of Hollywood\'s top Australian imports, was actually born in Honolulu, Hawaii, while her Australian parents were there on educational visas.\r\n\r\nKidman is the daughter of Janelle Ann (Glenny), a nursing instructor, and Antony David Kidman, a biochemist and clinical psychologist. She is of English, Irish, and Scottish descent. Shortly after her birth, the family moved to Washington, D.C., where Nicole\'s father pursued his research on breast cancer, and then, three years later, made the pilgrimage back to her parents\' native Sydney in Australia, where Nicole was raised. Young Nicole\'s first love was ballet, but she eventually took up mime and drama as well (her first stage role was a bleating sheep in an elementary school Christmas pageant). In her adolescent years, acting edged out the other arts and became a kind of refuge -- as her classmates sought out fun in the sun, the fair-skinned Kidman retreated to dark rehearsal halls to practice her craft. She worked regularly at the Philip Street Theater, where she once received a personal letter of praise and encouragement from audience member Jane Campion (then a film student). Kidman eventually dropped out of high school to pursue acting full-time. She broke into movies at age 16, landing a role in the Australian holiday favorite Bush Christmas (1983). That appearance touched off a flurry of film and television offers, including a lead in Le gang des BMX (1983) and a turn as a schoolgirl-turned-protester in the miniseries Vietnam (1987) (for which she won her first Australian Film Institute Award). With the help of an American agent, she eventually made her US debut opposite Sam Neill in the at-sea thriller Calme blanc (1989).'
          ]);

        DB::table('profiles')->insert(
          [
            'id' => NULL,
            'first_name' => 'Robert',
            'last_name' => 'Pattinson',
            'image' => 'https://ia.media-imdb.com/images/M/MV5BNzk0MDQ5OTUxMV5BMl5BanBnXkFtZTcwMDM5ODk5Mg@@._V1_UY317_CR12,0,214,317_AL_.jpg',
            'description' => 'Robert Douglas Thomas Pattinson was born May 13, 1986 in London, England, to Clare (Charlton), who worked at a modeling agency, and Richard Pattinson, a vintage car importer. He enjoys music and plays both the guitar and piano.\r\n\r\nWhen Robert was fifteen, he started acting in amateur plays with the Barnes Theatre Company. Afterward, he took screen role like L\'anneau sacré (2004) (Kingdom of Twilight) as Giselher.\r\n\r\nIn 2003, Robert took on the role of Cedric Diggory in Harry Potter et la coupe de feu (2005). He got his role a week later after meeting Mike Newell in late 2003.\r\n\r\nHe has since been cast as Edward Cullen in the highly-anticipated film, Twilight: Chapitre 1 - Fascination (2008). His music will also be heard in the film. Additionally, Robert has completed upcoming roles as Salvador Dalí in Little Ashes (2008) and Art in How to Be (2008).'
          ]);

        DB::table('profiles')->insert(
          [
            'id' => NULL,
            'first_name' => 'Robert',
            'last_name' => 'Redford',
            'image' => 'https://ia.media-imdb.com/images/M/MV5BMTk1Nzc5MzQyMV5BMl5BanBnXkFtZTcwNjQ5OTA0Mg@@._V1_UY317_CR7,0,214,317_AL_.jpg',
            'description' => 'Charles Robert Redford, Jr. was born on August 18, 1936, in Santa Monica, California, to Martha (Hart), from Texas, and Charles Robert Redford, an accountant for Standard Oil, who was originally from Connecticut. He is of English, Irish, and Scottish ancestry. Robert\'s mother died in 1955, the year after he graduated from high school. Robert was a scrappy kid who stole hubcaps in school and lost his college baseball scholarship at the University of Colorado because of drunkenness.\r\n\r\nAfter leaving UoC, he spent some time drifting across America, spending a time working in the California oil fields. Having saved enough he moved to Europe studying art in Paris and Florence.Back in the States he decided on a career as a theatrical designer in New York. Enrolling at the American Academy of Dramatic Art he turned to acting making his stage debut in \'Tall Story\'. In 1962 he was signed for the stage production of \'Barefoot in the Park\' which was a smash hit but it wasn\'t until 5 years later when it was filmed that he became an important star.'
          ]);

        DB::table('profiles')->insert(
          [
            'id' => NULL,
            'first_name' => 'Selena',
            'last_name' => 'Gomez',
            'image' => 'https://ia.media-imdb.com/images/M/MV5BMTU2NzAyMjA4OV5BMl5BanBnXkFtZTcwMjIyMjMyOQ@@._V1_UY317_CR2,0,214,317_AL_.jpg',
            'description' => 'Selena Marie Gomez was born and raised in Grand Prairie, Texas, to Mandy Teefey, who is of part Italian descent, and Ricardo Gomez, who is of Mexican descent and originally from New Mexico. Her parents divorced in 1997. Giving birth to Selena at 16, her mom Mandy recalls living "paycheck-to-paycheck". Selena started out on Barney (1992) as "Gianna" in 2001 where she really discovered her talent. Unfortunately, they dropped her from the series after just two years. In 2003, she had a very small role in the movie Mission 3D: Spy Kids 3 (2003) and a bit part in 2005 when she played "Julie" in Walker, Texas Ranger: Trial by Fire (2005) with Mitchel Musso and in 2006 as "Emily Grace Garcia" in Brain Zapped (2006) when she recorded a song for the movie. She she guest starred as "Gwen" in La vie de Palace de Zack et Cody (2005) and as Hannah\'s rival, the \'evil\' "Mikayla", in Hannah Montana (2006). Selena\'s amazing talent landed her roles in two Disney series, both spin-offs. Unfortunately, neither show was picked up until 2007 when she got the role of "Alex Russo" in the magical series Les sorciers de Waverly Place (2007) which she auditioned for three times. In March 2008, she made her first animated movie Horton (2008) and later starred in Comme Cendrillon 2 (2008) with Disney Channel star Drew Seeley for ABC Family. Her two Disney Channel Original Movies Princess Protection Program - Mission Rosalinda (2009), with real-life BFF Demi Lovato, and Les sorciers de Waverly Place - Le film (2009) will both air Summer 2009.'
          ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
