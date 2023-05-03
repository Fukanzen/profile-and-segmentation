<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class GachaController extends Controller
{
    //
    public function index(){
        $Servantdata =[
            ['id' => '1', 'charaName' => 'Gilgamesh', 'charaRare' => 'SSR', 'charaClass' => 'Archer', 'pic' => 'item1.png'],
            ['id' => '2', 'charaName' => 'Percival', 'charaRare' => 'SR', 'charaClass' => 'Lancer', 'pic' => 'item2.png'],
            ['id' => '3', 'charaName' => 'Altria Pendragon', 'charaRare' => 'SSR', 'charaClass' => 'Saber', 'pic' => 'item3.png'],
            ['id' => '4', 'charaName' => 'Robin Hood', 'charaRare' => 'R', 'charaClass' => 'Archer', 'pic' => 'item4.png'],
            ['id' => '5', 'charaName' => 'Charlemagne', 'charaRare' => 'SSR', 'charaClass' => 'Saber', 'pic' => 'item5.png'],
            ['id' => '6', 'charaName' => 'Fairy Knight Tristan', 'charaRare' => 'SR', 'charaClass' => 'Archer', 'pic' => 'item6.png'],
            ['id' => '7', 'charaName' => 'Cú Chulainn', 'charaRare' => 'R', 'charaClass' => 'Lancer', 'pic' => 'item7.png'],
            ['id' => '8', 'charaName' => 'William Tell', 'charaRare' => 'R', 'charaClass' => 'Archer', 'pic' => 'item8.png'],
            ['id' => '9', 'charaName' => 'Minamoto no Tametomo', 'charaRare' => 'SSR', 'charaClass' => 'Archer', 'pic' => 'item9.png'],
            ['id' => '10', 'charaName' => 'Romulus-Quirinus', 'charaRare' => 'SSR', 'charaClass' => 'Lancer', 'pic' => 'item10.png'],
            ['id' => '11', 'charaName' => 'Nagao Kagetora', 'charaRare' => 'SR', 'charaClass' => 'Lancer', 'pic' => 'item11.png'],
            ['id' => '12', 'charaName' => 'Chiron', 'charaRare' => 'SR', 'charaClass' => 'Archer', 'pic' => 'item12.png'],
            ['id' => '13', 'charaName' => 'Karna', 'charaRare' => 'SSR', 'charaClass' => 'Lancer', 'pic' => 'item13.png'],
            ['id' => '14', 'charaName' => 'Nero Claudius
            ', 'charaRare' => 'SR', 'charaClass' => 'Saber', 'pic' => 'item14.png']
        ];
        return view('Servantlist')-> with('servantdata', $Servantdata);
    }

    public function database($id){
        $ChaldeaDB =[
            ['id' => '1', 'charaName' => 'Gilgamesh', 'charaRare' => 'SSR', 'charaClass' => 'Archer', 'pic' => 'item1.png',
            'desc' =>
            'Height/Weight: 182cm, 68kg |
            Origin: Sumerian Civilization, The Epic of Gilgamesh |
            Region: Babylonia, Uruk |
            Alignment: Chaotic-Good |
            Gender: Male',

            'NP' => '
            『Enuma Elish』
            Star of Creation that Divided Heaven and Earth.
            Crowned with the name of a Mesopotamian god, the sword Ea can cause a rupture in space.
            One of the most powerful Noble Phantasms, it is a sword that can "cut apart worlds."'],

            ['id' => '2', 'charaName' => 'Percival', 'charaRare' => 'SR', 'charaClass' => 'Lancer', 'pic' => 'item2.png', 'desc' => 'Height/Weight: 195 cm, 110 kg |
            Source: Arthurian legend, the opera "Parsifal", and more. |
            Region: Europe |
            Alignment: Lawful-Good |
            Gender: Male',

            'NP' => '
            『Longinus Count Zero』
            Another Holy Spear, that is said to have pierced the chest of the Messiah.
            When its true name is unleashed, Longinus exhibits the true might of its powers that was observed back when Sir Balin wielded the Holy Spear and battled King Pellam. It functions as an anti-fortress Noble Phantasm that has even levelled the royal castle (which is the same as the Grail castle Corbenic).
            It is a fearsome Noble Phantasm of destruction, but it also has the ability to heal.
            The Holy Spear has 2 seals placed on it by Galahad and Balin. This can be seen as a downgraded version of the 13 seals placed on the Holy Lance Rhongomyniad wielded by the King of Knights (or the Holy Sword Excalibur wielded by the King of Knights from another world).'],

            ['id' => '3', 'charaName' => 'Altria Pendragon', 'charaRare' => 'SSR', 'charaClass' => 'Saber', 'pic' => 'item3.png', 'desc' => 'Height/Weight: 154cm, 42kg |
            Origin: Legend of King Arthur |
            Region: England |
            Alignment: Lawful-Good |
            Gender: Female',

            'NP' => '『Excalibur』
                Sword of Promised Victory.
                A weapon not forged by man, but a Divine Construct forged within the Planet.
                The Noble Phantasm that is greatest of all sacred swords.
                The true power of the sword lies within its sheath, which is said to be lost forever.'],

            ['id' => '4', 'charaName' => 'Robin Hood', 'charaRare' => 'R', 'charaClass' => 'Archer', 'pic' => 'item4.png', 'desc' => 'Height/Weight: 175cm, 65kg |
            Source: Historical Fact |
            Region: England, Sherwood |
            Alignment: Neutral-Good |
            Gender: Male',

            'NP' => '『Bow of Prayer』
            A bow manufactured from yew wood found in the forest he used as his base while alive.
            The yew is a sacred tree in Celtic and Norse cultures, and the act of producing a bow of yew holds a meaning of a ceremony to "become one with the forest".'],

            ['id' => '5', 'charaName' => 'Charlemagne', 'charaRare' => 'SSR', 'charaClass' => 'Saber', 'pic' => 'item5.png', 'desc'=>'Height / Weight: 176 cm, 69 kg |
            Source: Legend of Charlemagne |
            Region: France |
            Alignment: Lawful-Good |
            Gender: Male',

            'NP'=>'『Joyeuse Ordre』
            ’Ordre’ means ’Order’. |
            In fact, it is only Charlemagne, not Karl der Große, that can demonstrate the true value of Joyeuse.
            For Karl der Große, who lived in reality, Joyeuse was nothing more than a sacred skill that had developed illusory legends around it.

            In terms of pure destructive ability, it’s comparable to a blow from Roland’s Durandal with its True Name released. However, as Charlemagne is originally a king, not a knight, he’d be defeated in a head-on collision with someone like Roland.

            But through Charlemagne’s kingly courage…
            That is, when showing his dignity as a king, the legends of the Twelve Paladins is infused within that ’illusion’, and one more ’Joyeuse’ is added each time.
            Instead of being swapped out, they join in.
            The simple calculation is that it can become thirteen times stronger, however the destructive potential will be further magnified depending on his kingly charisma.

            Twelve “Joyeuse” are added pictorially, and they attack while moving freely, including one that he wields.
            In addition, the ’range’ and ’maximum capture’ are 1 because this Noble Phantasm is a blade pointed at itself.
            In terms of attack range, it is considered a medium range Anti-Army Noble Phantasm.

            The supreme thirteen strikes that neither the greatest hero in Greece,
            Nor the swordfighter of infinity can replicate.
            However, this destructive power depends on just how kingly Charlemagne can be.'],

            ['id' => '6', 'charaName' => 'Fairy Knight Tristan', 'charaRare' => 'SR', 'charaClass' => 'Archer', 'pic' => 'item6.png', 'desc'=>'Height/Weight: 170cm, 54kg |
            Source: the United Kingdom’s History of the Fae as well as Lostbelt Britain |
            Region: Land of the Fae - the vicinity of Darlington |
            Alignment: Chaotic Evil |
            Gender: Female',

            'NP'=>'『Fetch Failnaught』|
            The strike (kiss) of a demon that curses its target to death without fail with no regard for distance.
            It creates a double of the enemy from their flesh (hair, nail etc.) and by killing this double, the enemy is cursed to death. It is similar to a fae version of the ushi-no-kokumairi ritual.
            Also, Fetch is a type of doppelganger from Scotland.'],

            ['id' => '7', 'charaName' => 'Cú Chulainn', 'charaRare' => 'R', 'charaClass' => 'Lancer', 'pic' => 'item7.png', 'desc'=>'Height/Weight: 185cm, 72kg |
            Source: Celtic mythology, Ulster mythology |
            Region: Ireland |
            Attribute: orderly-moderate |
            Gender: male',
            'NP'=>'
            『Piercing Deaththorn Spear』Gae Bolg.
            A cursed spear that will surely pierce the opponent’s heart if struck.
            Its true identity is that the spear hit the opponent’s heart.
            A stab of reversal of cause and effect that shoots a spear after the result.
            Since it is a blow that depends on the result, it is said to be impossible to avoid.
            '],

            ['id' => '8', 'charaName' => 'William Tell', 'charaRare' => 'R', 'charaClass' => 'Archer', 'pic' => 'item8.png', 'desc'=>'Height/Weight: 175cm, 69kg |
            Source: "William Tell" |
            Region: Switzerland |
            Attribute: Lawful/Good |
            Gender: Male',

            'NP'=>'『Unleashed Arrow of Faith』 Apfel Schießen.
            The reading means "shooting apples".
            A legendary crossbow arrow that pierced the apple on his son’s head.
            This single arrow, fired with the son’s trust in his father, never misses, and "always" pierces the target.
            This anecdote sublimated into a Noble Phantasm interferes with the law of cause and effect,
            Avoidance is basically impossible.'],

            ['id' => '9', 'charaName' => 'Minamoto no Tametomo', 'charaRare' => 'SSR', 'charaClass' => 'Archer', 'pic' => 'item9.png', 'desc' => 'Height/Weight: 232 cm, 190 kg |
            Source: Historical facts, "Chinsetsu Yumiharizuki", etc. |
            Region: Japan |
            Alignment: Neutral・Balanced |
            Gender: Male',

            'NP' => '『Instant Sinking Moonbow』
            Gouchi, Yumi Harizuki

            The moonbow that instantly sunk a ship.
            The recreation of the anecdote where he sunk a ship with only a single arrow.
            However, he wasn’t taking it as seriously when it was only wooden boats, so he’d prefer to give it his all now that he’s a Servant.
            Additionally, because of the increased Mystery on the sea (or waterside), now even the most advanced warships can be struck fatally, and nuclear submarines struggle to escape from these arrows.

            Continuous usage of this Noble Phantasm requires considerable time and inflicts a notable burden, but with continuous checking between shooting intervals, or splitting the shot into three parts, you can use solid ingenuity keep your opponent at bay.'],

            ['id' => '10', 'charaName' => 'Romulus-Quirinus', 'charaRare' => 'SSR', 'charaClass' => 'Lancer', 'pic' => 'item10.png', 'desc' => 'Height/Weight: 185cm, 73kg |
            Origin: Roman Mythology |
            Region: Europe |
            Alignment: Chaotic-Balanced |
            Gender: - |
            As Romulus was conceptualized as the ultimate being, characteristics typically assigned to living beings or positions on Earth do not apply.',

            'NP' => '『Nine Lives Rome』
            Slaying A Hundred Heads, Roman Style.
            A combat method devised by the great hero of Greek mythology, Heracles. It sublimated into its new manifestation possibly resulting from information passed down from the war god Mars (Ares), who watched over all of Heracles’s fierce battles...or perhaps from the lore about Heracles being the father of Romulus. The school of Heracles, Rome branch, per se. A flurry of fists, similar to a spear of light, slaughters even monsters that are already devoid of life, and flings them skyward them to make the starry heavens sparkle.

            A continuously active Noble Phantasm.
            In this game, it is expressed as a skill.
            Although they will unleash intense lightning strikes at the time of their True Name revelation, it is not typically used in this game.'],

            ['id' => '11', 'charaName' => 'Nagao Kagetora', 'charaRare' => 'SR', 'charaClass' => 'Lancer', 'pic' => 'item11.png', 'desc' => ' Height/Weight: 167cm, 53kg |
            Origin: History |
            Region: Japan |
            Alignment: Lawful-Good |
            Gender: Female',

            'NP' => '『Bishamonten’s Eight Phases Wheel Charge Formation』
            Biten hassou kurumagakari no jin. The rotating formation that Nagao Kagetora was said to be fond of, transformed into a Noble Phantasm suitable for individual combat. Originally, the formation involved splitting the army into several sections, which all take turns attacking the enemy lines.

            When the True Name is invoked, the mounted and fully armed Kagetora is split into eight clones, which strike the enemy alternately, as a sure-kill one-person rotating formation.

            “Gallop forth, Houshoutsukige! Bishamonten’s protection is with me!”

            Let it be known that her beloved steed, Houshoutsukige, originally incapable of being summoned in any class but Rider, was forcibly summoned in a flagrant instance of rule breaking under the name of Bishamonten.'],

            ['id' => '12', 'charaName' => 'Chiron', 'charaRare' => 'SR', 'charaClass' => 'Archer', 'pic' => 'item12.png', 'desc' => 'Height/Weight: 179cm, 81kg |
            Origin: Greek Mythology |
            Region: Greece |
            Alignment: Lawful-Good |
            Gender: Male |
            He was the child of Cronus, Zeus’s father, and the island goddess Philyra.',

            'NP' => '『Antares Snipe』
            A Single Shot at the Celestial Scorpion.
            A manifestation of the story of Chiron as Sagittarius poised to attack the scorpion in the heavens. This Noble Phantasm, the ultimate shot for which all bowmen eternally strive, can pierce even a star. This shot can be used the moment its True Name is revealed, and it is no mere arrow, but a shooting star that streaks across the sky. Even Achilles, known to be a fast runner, could not evade this Noble Phantasm. The sole drawback is that it can be used only once each night. However, if it’s used correctly at the right time, it is certain to hit its mark.'],

            ['id' => '13', 'charaName' => 'Karna', 'charaRare' => 'SSR', 'charaClass' => 'Lancer', 'pic' => 'item13.png', 'desc' => 'Height/Weight: 178cm, 65kg |
            Origin: Mahabharata |
            Region: India |
            Alignment: Lawful-Good |
            Gender: Male |
            The great hero of the Mahabharata, an epic, ancient Indian poem.
            He is the rival of Arjuna, the main hero of Mahabharata, and his half brother.
            By the time Karna faced his half brother he was unable to move due to multiple layers of curses, and Arjuna took advantage and murdered him in cold blood.
            ',

            'NP' => '
            『Vasavi Shakti』According to the legend, Karna gave his golden armor to Indra.
            In exchange for giving up and dismantling his armor, Karna received a lance powerful enough to slay even gods.
            It is said this lance of light cannot be wielded by even the King of Gods.
            When this lance is clad with crimson blood, one strike, just one strike, is said to be able to cleanse all impurities.'],

            ['id' => '14', 'charaName' => 'Nero Claudius
            ', 'charaRare' => 'SR', 'charaClass' => 'Saber', 'pic' => 'item14.png', 'desc' => 'Height/Weight: 150cm, 42kg |
            Origin: History |
            Region: Rome |
            Alignment: Chaotic-Good |
            Gender: Female',

            'NP' => '『Aestus Domus Aurea』
            Invitation to the Golden Debauchery Theater.
            An absolute emperor’s field that fulfills her desires. A magical recreation of the theatre "Domus Aurea" she designed herself and built in Rome when she was alive. It creates a battlefield that works to her advantage.']
        ];
        $temp =[];
        foreach ($ChaldeaDB as $int) {
            if($int['id'] == $id) $temp = $int;
        }
        return view('AtlasDB')-> with('ChaldeaDB', $temp);
    }
}
