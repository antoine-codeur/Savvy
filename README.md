# Projet Portfolio - Surveillance de l'Arborescence

Ce projet inclut un script Python (`monitor.py`) qui surveille les modifications dans le répertoire du projet et met à jour un fichier `tree.txt` pour refléter l'arborescence actuelle du projet. Le script exclut les fichiers et dossiers spécifiés dans `exclude_dirs.txt`.

## Configuration de l'Environnement

Avant de lancer le script, assurez-vous que votre environnement Python est configuré. Ce projet suppose que vous utilisez un environnement virtuel pour gérer les dépendances.

### Prérequis

- Python 3.x
- 'python3 -m venv myenv'
- 'source myenv/bin/activate'
- `watchdog` bibliothèque Python
Vous pouvez installer `watchdog` en utilisant pip :

'pip install watchdog'

### Démarrage
Pour lancer le script, naviguez au répertoire contenant le script et exécutez :
1. 'myenv\Scripts\activate'     # Windows 
   'source myenv/bin/activate'  # Unix ou MacOS
2. 'python3 program/monitor.py'

### Arrêt 
Pour arreter le script, naviguez au répertoire contenant le script et exécutez :
1. Ctrl+C
2. deactivate