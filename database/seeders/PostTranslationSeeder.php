<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class PostTranslationSeeder extends Seeder
{
    public function run()
    {
        $posts = [
            [
                [
                    "locale" => "es",
                    "title" => "Los cambios de temperatura y los peludos",
                    "content" => "Hay una creencia generalizada de que los parásitos que infestan a nuestros peludos sólo aparecen en primavera.",
                ],
                [
                    "locale" => "en",
                    "title" => "Temperature changes and hairy ones",
                    "content" => "There is a widespread belief that the parasites that infest our furry only appear in spring.",
                ],
                [
                    "locale" => "pt",
                    "title" => "Mudanças de temperatura e cabeludas",
                    "content" => "Existe uma crença generalizada de que os parasitas que infestam nosso pelo só aparecem na primavera.",
                ]
            ],
            [
                ["locale" => "es",
                    "title" => "Cómo tu gato te dice “te quiero”",
                    "content" => "Los gatos también tienen sus muestras de cariño y afecto, aunque lo hacen con sus propios comportamientos y gestos corporales.",
                ],
                [
                    "locale" => "en",
                    "title" => "How your cat says I love you",
                    "content" => "Cats also have their displays of affection and affection, although they do so with their own behaviors and body gestures.",
                ],
                [
                    "locale" => "pt",
                    "title" => "Como seu gato diz eu te amo",
                    "content" => "Os gatos também têm suas demonstrações de afeto e carinho, embora o façam com seus próprios comportamentos e gestos corporais.",
                ]
            ],
            [
                [
                    "locale" => "es",
                    "title" => "Cómo afecta la muda del pelo a tu mascota",
                    "content" => "Pelos por el suelo, el sofá, la alfombra... en aquellos lugares en los que nuestra mascota se encuentre cerca, podremos encontrar la gran ‘molestia’ del pelaje.",
                ],
                [
                    "locale" => "en",
                    "title" => "How shedding affects your pet",
                    "content" => "Hair on the floor, the sofa, the carpet... in those places where our pet is nearby, we can find the great 'nuisance' of fur.",
                ],
                [
                    "locale" => "pt",
                    "title" => "Como a eliminação afeta seu animal de estimação",
                    "content" => "Cabelo no chão, no sofá, no tapete, ... naqueles lugares onde o nosso animal está por perto, podemos encontrar o grande 'incômodo' do pelo.",
                ]
            ],
            [
                [
                    "locale" => "es",
                    "title" => "Infecciones que tu gato puede transmitir a tu familia",
                    "content" => "Las zoonosis son aquellas enfermedades que pueden transmitirse directa o indirectamente entre animales y personas.",
                ],
                [
                    "locale" => "en",
                    "title" => "Infections that your cat can transmit to your family",
                    "content" => "Zoonoses are those diseases that can be transmitted directly or indirectly between animals and people.",
                ],
                [
                    "locale" => "pt",
                    "title" => "Infecções que seu gato pode transmitir para sua família",
                    "content" => "Zoonoses são aquelas doenças que podem ser transmitidas direta ou indiretamente entre animais e pessoas.",
                ]
            ],
            [
                [
                    "locale" => "es",
                    "title" => "La nueva campaña que te convencerá sobre porqué debes desparasitar a las mascotas",
                    "content" => "Hemos lanzado la nueva campaña, que te va a dar más razones, si cabe, sobre porqué desparasitar a las mascotas.",
                ],
                [
                    "locale" => "en",
                    "title" => "The new campaign that will convince you why you should deworm pets",
                    "content" => "We have launched the new campaign, which will give you more reasons, if possible, about why deworming pets.",
                ],
                [
                    "locale" => "pt",
                    "title" => "A nova campanha que vai convencê-lo por que você deve desparasitar animais de estimação",
                    "content" => "Lançamos a nova campanha, que apresentará mais razões, se possível, sobre o motivo da desparasitação de animais de estimação.",
                ]
            ],
            [
                [
                    "locale" => "es",
                    "title" => "Basenji, la única raza de perro del mundo que no ladra",
                    "content" => "Conoces la raza de perro que no ladra? Pues sí, Basenji es la única en el mundo.",
                ],
                [
                    "locale" => "en",
                    "title" => "Basenji, the only breed of dog in the world that does not bark",
                    "content" => "Do you know the breed of dog that does not bark? Well yes, Basenji is the only one in the world.",
                ],
                [
                    "locale" => "pt",
                    "title" => "Basenji, a única raça de cachorro do mundo que não late",
                    "content" => "Você conhece a raça de cachorro que não late? Bem, sim, Basenji é o único no mundo.",
                ]
            ],
            [
                [
                    "locale" => "es",
                    "title" => "10 claves para la mejor convivencia entre el perro y el gato",
                    "content" => "Se trata sin duda de las dos especies de mascotas más habituales y que más éxito tienen como animales de compañía.",
                ],
                [
                    "locale" => "en",
                    "title" => "10 keys for the best coexistence between the dog and the cat",
                    "content" => "They are undoubtedly the two most common and successful pet species as companion animals.",
                ],
                [
                    "locale" => "pt",
                    "title" => "10 chaves para a melhor convivência entre o cão e o gato",
                    "content" => "Eles são, sem dúvida, as duas espécies de animais de estimação mais comuns e bem-sucedidas como animais de companhia.",
                ]
            ]
        ];
        foreach ($posts as $translations) {
            App::setLocale('en');
            $post = new Post();
            $post->online = true;
            $post->save();
            foreach ($translations as $translation) {
                $locale = $translation['locale'];
                $title = $translation['title'];
                $slug = Str::slug($title, '-');
                $content = $translation['content'];
                $post->translateOrNew($locale)->title = $title;
                $post->translateOrNew($locale)->slug = $slug;
                $post->translateOrNew($locale)->content = $content;
                $post->save();
            }
        }
    }
}