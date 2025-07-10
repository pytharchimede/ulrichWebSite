<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - Amani Yao Ulrich</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.4.0/purify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Thème clair */
        .light-theme {
            --bg-color: #ffffff;
            --text-color: #000000;
            --button-bg: #007bff;
        }

        /* Thème sombre */
        .dark-theme {
            --bg-color: #121212;
            --text-color: #ffffff;
            --button-bg: #0069d9;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        button {
            background-color: var(--button-bg);
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
        }

        .content-to-export {
            padding: 20px;
        }


        /*Bouttons export et switch*/
        /* Style global des boutons */
        .btn {
            display: inline-flex;
            align-items: center;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        /* Bouton primaire (export PDF) */
        .btn-primary {
            background-color: #f44336;
            color: white;
        }

        .btn-primary:hover {
            background-color: #d32f2f;
        }

        /* Bouton secondaire (switch thème) */
        .btn-secondary {
            background-color: #3f51b5;
            color: white;
        }

        .btn-secondary:hover {
            background-color: #303f9f;
        }

        /* Icônes dans les boutons */
        .btn i {
            font-size: 18px;
        }

        /* Effet de survol */
        .btn:hover {
            transform: translateY(-2px);
        }

        /* Ajout d'une ombre pour un effet plus attrayant */
        .btn:active {
            transform: translateY(2px);
        }

        /* Ajustements pour mobile */
        @media (max-width: 600px) {
            .btn {
                font-size: 14px;
                padding: 8px 16px;
            }
        }

        /* Bouton de base */
        .btn {
            display: inline-flex;
            align-items: center;
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        /* Bouton d'exportation (PDF) */
        .btn-primary {
            background-color: #f44336;
            /* Red */
            color: white;
        }

        .btn-primary:hover {
            background-color: #d32f2f;
        }

        /* Bouton de switch de thème */
        .btn-secondary {
            background-color: #3f51b5;
            /* Blue */
            color: white;
        }

        .btn-secondary:hover {
            background-color: #303f9f;
        }

        /* Ajout d'une ombre pour un effet plus attrayant */
        .btn:active {
            transform: translateY(2px);
        }

        /* Style pour les boutons en mode dark */
        .dark .btn-primary,
        .dark .btn-secondary {
            background-color: #1a202c;
            /* Dark mode color */
            color: white;
        }

        /* Effet de survol pour le mode sombre */
        .dark .btn-primary:hover,
        .dark .btn-secondary:hover {
            background-color: #2d3748;
        }

        /* Ajustements pour mobile */
        @media (max-width: 600px) {
            .btn {
                font-size: 14px;
                padding: 8px 16px;
            }
        }
    </style>
</head>

<body class="bg-gray-800 text-white">

    <div class="flex justify-center items-center mt-10">
        <!-- Boutons dans un conteneur centré -->
        <div class="space-x-4">
            <!-- Bouton d'exportation en PDF -->
            <button id="export-pdf" class="btn btn-primary dark:bg-gray-700 dark:text-white hover:dark:bg-gray-600 transition-all">
                <i class="fas fa-file-pdf mr-2 text-white"></i>Exporter en PDF
            </button>

            <!-- Bouton de switch de thème -->
            <button id="theme-switch" class="btn btn-secondary dark:bg-gray-700 dark:text-white hover:dark:bg-gray-600 transition-all">
                <i class="fas fa-moon mr-2 text-white"></i>Basculer Thème
            </button>
        </div>
    </div>

    <div class="max-w-5xl mx-auto p-8 bg-gray-900 shadow-2xl rounded-lg mt-10 content-to-export">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-blue-400">Amani Yao Ulrich</h1>
            <p class="text-lg text-gray-400">Développeur d'Applications Senior</p>
        </div>

        <div class="flex flex-col md:flex-row items-start mt-6 md:space-x-8 space-y-6 md:space-y-0">
            <!-- Contacts Section -->
            <div class="flex flex-col items-start space-y-4 w-full md:w-1/2">
                <p><i class="fas fa-phone-alt text-blue-500 mr-2"></i> <strong>Téléphone :</strong> +225 07 48 36 77 10</p>
                <p><i class="fab fa-whatsapp text-blue-500 mr-2"></i> <strong>WhatsApp :</strong>
                    <a href="https://wa.me/+2250748367710" class="text-blue-400" target="_blank">+225 07 48 36 77 10</a>
                </p>

                <p><i class="fas fa-envelope text-blue-500 mr-2"></i> <strong>Email :</strong> <a href="mailto:amani_ulrich@outlook.fr" class="text-blue-400">amani_ulrich@outlook.fr</a></p>
                <p><i class="fas fa-map-marker-alt text-blue-500 mr-2"></i> <strong>Lieu :</strong> Abidjan, Côte d'Ivoire</p>
                <p><i class="fab fa-linkedin text-blue-500 mr-2"></i> <strong>LinkedIn :</strong> <a target="_blank" href="https://linkedin.com/in/ulrich-amani-643a3311b" class="text-blue-400">ulrich-amani</a></p>
            </div>
            <!-- Resume Section -->
            <div class="w-full md:w-1/2 text-gray-400">
                <p class="mb-4">
                    <strong>Résumé :</strong>
                    Développeur web expérimenté, je suis dynamique et j’aime travailler en équipe pour relever des
                    challenges techniques. J’ai une bonne maîtrise des outils de développement et je suis en constante
                    recherche d’apprentissage. Découvrez-en plus sur mon profil lors d’une rencontre.
                </p>
                <p>
                    Ce présent CV ne contient pas la liste exhaustive des applications fonctionnelles que j’ai mis en place.
                </p>
            </div>
        </div>


        <h2 class="text-3xl font-semibold mt-8 border-b-4 pb-2 border-blue-500">Expériences professionnelles</h2>

        <div class="mt-6 bg-gray-800 p-6 rounded-lg shadow-lg">
            <h3 class="text-2xl font-bold text-blue-400">Responsable Informatique - Banamur Industrie</h3>
            <p class="text-gray-400 italic">Depuis Septembre 2024</p>
            <ul class="list-disc list-inside mt-3 text-gray-300 space-y-2">
                <li>Supervision de la transformation digitale des processus métiers.</li>
                <li>Gestion et sécurisation du Système d'Informations.</li>
                <li><strong>Développement d'une application de gestion des ressources humaines.</strong></li>
                <li><strong>Développement d'une application de gestion des dépenses</strong> pour l'automatisation des fiches d'expression de besoin.</li>
                <li><strong>Fonctionnalités clés :</strong></li>
                <ul class="list-square ml-6 text-gray-400">
                    <li>Alertes automatisées via <span class="text-green-400 font-semibold">SMS</span>, <span class="text-blue-400 font-semibold">mails</span> et <span class="text-green-500 font-semibold">WhatsApp</span>.</li>
                    <li>Niveaux d'accès multiples pour une gestion sécurisée.</li>
                    <li>Envoi automatique de récapitulatifs via WhatsApp et email.</li>
                    <li>Intégration des différents niveaux de validation des <span class="text-blue-500 font-semibold">demandes de décaissement</span> et des <span class="text-blue-500 font-semibold">fiches d'expression de besoin</span>.</li>
                </ul>
                <li><strong>Développement d'une application mobile</strong> dédiée à la validation des décaissements.</li>
            </ul>
        </div>

        <div class="mt-4">
            <h3 class="text-xl font-bold text-blue-400">Développeur d'Applications - DIATA TECH</h3>
            <p class="text-gray-400 italic">Mai 2023 - Septembre 2024</p>
            <ul class="list-disc list-inside mt-2 text-gray-300">
                <li>Développement d'une application de gestion immobilière digitalisée avec Laravel.</li>
                <li>Participation à l'équipe de correction et amélioration des performances.</li>
                <li>Utilisation de JIRA et Git pour la gestion de projet et versionning.</li>
            </ul>
        </div>

        <div class="mt-4">
            <h3 class="text-xl font-bold text-blue-400">Responsable Informatique - Lynays Entreprises</h3>
            <p class="text-gray-400 italic">Novembre 2022 - Mai 2023</p>
            <ul class="list-disc list-inside mt-2 text-gray-300">
                <li>Développement d'applications et de sites web, ainsi que maintenance, transformation digitale et gestion hardware et software pour l'entreprise opérant dans l'énergie renouvelable.</li>
            </ul>
        </div>

        <div class="mt-4">
            <h3 class="text-xl font-bold text-blue-400">Développeur d'Applications - Yadec Consulting</h3>
            <p class="text-gray-400 italic">Février 2022 - Novembre 2022</p>
            <ul class="list-disc list-inside mt-2 text-gray-300">
                <li>Développement d'applications et d'outils de collecte, d'analyse et de traitement de données.</li>
                <li>Exemples de projets réalisés :
                    <ul class="list-disc list-inside ml-4">
                        <li><a href="https://evaluation.yadecdigital.ci/" class="text-blue-400" target="_blank">Évaluation des performances des employés</a></li>
                        <li><a href="https://smark.yadecdigital.ci/" class="text-blue-400" target="_blank">Outil de diagnostic marketing automatisé</a></li>
                        <li><a href="https://digimat.yadecdigital.ci/" class="text-blue-400" target="_blank">Outil de collecte et d'analyse de données</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="mt-4">
            <h3 class="text-xl font-bold text-blue-400">Assistant Développeur d'Applications - TERRA (Terminal Roulier d'Abidjan)</h3>
            <p class="text-gray-400 italic">Septembre 2018 - Mai 2020</p>
            <ul class="list-disc list-inside mt-2 text-gray-300">
                <div class="bg-gray-800 text-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold mb-4 border-b-2 border-blue-500 pb-2">Application d'exploitation du Centre Médical du SEMPA (PAA & PAS)</h3>
                    <ul class="list-disc pl-5 space-y-2 text-gray-300">
                        <li><strong>Gestion de la population :</strong> Dockers, familles de dockers, assurés SEMPA, personnel des sociétés affiliées.</li>
                        <li><strong>Prise de rendez-vous :</strong> Consultation et prise des constantes des patients.</li>
                        <li><strong>Processus de consultation :</strong> Prescription d'ordonnance et gestion des produits en pharmacie.</li>
                        <li><strong>Délivrance de médicaments :</strong> Gestion et distribution des médicaments en pharmacie du CMS SEMPA.</li>
                        <li><strong>Gestion du stock :</strong> Supervision des produits et des approvisionnements en pharmacie.</li>
                        <li><strong>Statistiques :</strong> Rapports détaillés et analyses des données.</li>
                        <li><strong>Traçabilité des opérations :</strong> Historique des actions et suivi des transactions.</li>
                        <li><strong>Exportation des données :</strong> Génération et export en <span class="text-blue-400 font-semibold">PDF</span>, <span class="text-green-400 font-semibold">Excel</span>, et impression.</li>
                    </ul>
                </div>
                <li>Conception et développement d'applications pour la gestion des ressources humaines et la gestion électronique des documents.</li>
                <li>Mise en place d'une interface d'échange de documents pour faire face à la situation sanitaire COVID-19.</li>
                <li>Développement d'une application pour la gestion du Centre Médical du SEMPA, incluant la prise de rendez-vous, la prescription d'ordonnance, la gestion des stocks en pharmacie et la génération de statistiques.</li>
                <li>Mise en place d'un système de suivi et de traçabilité des opérations, avec exportation des données en PDF, Excel et impression.</li>
                <li>Conception et développement d'une application pour la gestion électronique des documents.</li>
            </ul>
        </div>

        <div class="mt-4">
            <h3 class="text-xl font-bold text-blue-400">Développeur d'Applications Stagiaire - CNCH (Centre National du Courrier Hybride) de La Poste de CI</h3>
            <p class="text-gray-400 italic">Novembre 2017 - Mai 2018</p>
            <ul class="list-disc list-inside mt-2 text-gray-300">
                <li>Développement d'une application pour la production et le tri automatique des avis d'impôt foncier à l'échelle nationale à partir d'un fichier de données CSV.</li>
            </ul>
        </div>

        <h2 class="text-3xl font-semibold mt-8 border-b-4 pb-2 border-blue-500">Compétences techniques</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
            <!-- Langages -->
            <div class="space-y-4">
                <h3 class="text-xl font-semibold text-blue-400">Langages</h3>
                <div class="space-y-2">
                    <p><strong>PHP :</strong> <span class="text-gray-300">Création d'applications web dynamiques et sécurisées</span></p>
                    <div class="w-full bg-gray-300 rounded-full">
                        <div class="bg-blue-500 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 85%">85%</div>
                    </div>

                    <p><strong>HTML/CSS :</strong> <span class="text-gray-300">Création de structures web modernes et responsive</span></p>
                    <div class="w-full bg-gray-300 rounded-full">
                        <div class="bg-blue-500 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 90%">90%</div>
                    </div>

                    <p><strong>JavaScript :</strong> <span class="text-gray-300">Développement de fonctionnalités interactives et dynamiques</span></p>
                    <div class="w-full bg-gray-300 rounded-full">
                        <div class="bg-blue-500 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 80%">80%</div>
                    </div>

                    <p><strong>Flutter :</strong> <span class="text-gray-300">Création d'applications mobiles cross-platform</span></p>
                    <div class="w-full bg-gray-300 rounded-full">
                        <div class="bg-blue-500 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 75%">75%</div>
                    </div>

                    <p><strong>.NET :</strong> <span class="text-gray-300">Développement d'applications desktop et web</span></p>
                    <div class="w-full bg-gray-300 rounded-full">
                        <div class="bg-blue-500 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 70%">70%</div>
                    </div>
                </div>
            </div>

            <!-- Base de données et Outils -->
            <div class="space-y-4">
                <h3 class="text-xl font-semibold text-blue-400">Base de données et Outils</h3>
                <div class="space-y-2">
                    <p><strong>MySQL :</strong> <span class="text-gray-300">Création et gestion de bases de données relationnelles</span></p>
                    <div class="w-full bg-gray-300 rounded-full">
                        <div class="bg-blue-500 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 80%">80%</div>
                    </div>

                    <p><strong>Visual Studio Code :</strong> <span class="text-gray-300">IDE pour le développement rapide et efficace</span></p>
                    <div class="w-full bg-gray-300 rounded-full">
                        <div class="bg-blue-500 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 95%">95%</div>
                    </div>

                    <p><strong>Git/GitHub :</strong> <span class="text-gray-300">Gestion de version et collaboration en équipe</span></p>
                    <div class="w-full bg-gray-300 rounded-full">
                        <div class="bg-blue-500 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 85%">85%</div>
                    </div>

                    <p><strong>Jira :</strong> <span class="text-gray-300">Gestion de projets Agile et suivi des tâches</span></p>
                    <div class="w-full bg-gray-300 rounded-full">
                        <div class="bg-blue-500 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 75%">75%</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Compétences supplémentaires -->
        <div class="mt-8">
            <h3 class="text-xl font-semibold text-blue-400">Compétences supplémentaires</h3>
            <div class="space-y-4">
                <p><strong>Photoshop :</strong> <span class="text-gray-300">Création de designs graphiques et retouches</span></p>
                <div class="w-full bg-gray-300 rounded-full">
                    <div class="bg-blue-500 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 80%">80%</div>
                </div>

                <p><strong>Illustrator :</strong> <span class="text-gray-300">Création de graphismes vectoriels</span></p>
                <div class="w-full bg-gray-300 rounded-full">
                    <div class="bg-blue-500 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 20%">20%</div>
                </div>

                <p><strong>Réseau :</strong> <span class="text-gray-300">Gestion et dépannage de réseaux</span></p>
                <div class="w-full bg-gray-300 rounded-full">
                    <div class="bg-blue-500 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 30%">30%</div>
                </div>

                <p><strong>Maintenance physique :</strong> <span class="text-gray-300">Réparation et maintenance des équipements informatiques</span></p>
                <div class="w-full bg-gray-300 rounded-full">
                    <div class="bg-blue-500 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 80%">80%</div>
                </div>

                <!-- Systèmes d'exploitation -->
                <p><strong>Windows :</strong> <span class="text-gray-300">Maîtrise avancée des systèmes Windows pour développement et gestion</span></p>
                <div class="w-full bg-gray-300 rounded-full">
                    <div class="bg-blue-500 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 97%">97%</div>
                </div>

                <p><strong>Linux :</strong> <span class="text-gray-300">Utilisation quotidienne de Linux pour le développement et la gestion de serveurs</span></p>
                <div class="w-full bg-gray-300 rounded-full">
                    <div class="bg-blue-500 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 80%">80%</div>
                </div>

                <p><strong>Mac :</strong> <span class="text-gray-300">Utilisation pour le développement d'applications mobiles et le design</span></p>
                <div class="w-full bg-gray-300 rounded-full">
                    <div class="bg-blue-500 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 50%">50%</div>
                </div>
            </div>
        </div>

        <!-- Création et intégration d'API -->
        <div class="mt-8">
            <h3 class="text-xl font-semibold text-blue-400">Création et intégration d'API</h3>
            <p class="text-gray-300">
                J'ai une grande expérience dans la création d'APIs RESTful pour les applications web et mobiles. Je suis capable de concevoir des APIs performantes, sécurisées et facilement intégrables avec des systèmes tiers.
            </p>
            <p class="text-gray-300">
                Que ce soit pour la gestion des utilisateurs, des transactions, ou l'intégration avec des services externes, je maîtrise l'ensemble du processus de création d'API, y compris la gestion des authentifications et des permissions.
            </p>
        </div>



        <h2 class="text-3xl font-semibold mt-8 border-b-4 pb-2 border-blue-500">Consulting</h2>
        <ul class="list-disc list-inside mt-4 text-gray-300">
            <li>Lynays Entreprises (Nov. 2022 - Mai 2023) : Système d'information</li>
            <li>Banamur Industries (Depuis Déc. 2022) : Transformation digitale</li>
            <li>STTCI (Depuis Fév. 2023) : Sécurisation du Système d'Informations</li>
        </ul>
    </div>
    <script>
        document.getElementById('export-pdf').addEventListener('click', function() {
            const {
                jsPDF
            } = window.jspdf;
            const doc = new jsPDF();
            const content = document.querySelector('.content-to-export').innerHTML;

            doc.html(content, {
                callback: function(doc) {
                    doc.save('profil.pdf');
                },
                margin: [10, 10, 10, 10]
            });
        });

        const themeSwitchButton = document.getElementById('theme-switch');
        const currentTheme = localStorage.getItem('theme') || 'light';

        // Appliquer le thème actuel
        document.body.classList.add(currentTheme + '-theme');

        themeSwitchButton.addEventListener('click', function() {
            if (document.body.classList.contains('light-theme')) {
                document.body.classList.remove('light-theme');
                document.body.classList.add('dark-theme');
                localStorage.setItem('theme', 'dark');
            } else {
                document.body.classList.remove('dark-theme');
                document.body.classList.add('light-theme');
                localStorage.setItem('theme', 'light');
            }
        });
    </script>
</body>

</html>