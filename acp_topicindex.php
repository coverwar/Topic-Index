<?php
/**
*
* @package phpBB Extension - Topic Index
* @copyright (c) 2015 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
	'OFFICIAL_TOPIC_INDEX' => 'Gestisci l-estensione ufficiale dell-indice degli argomenti' , 
	'ADD_NEW_TOPICS_LIST' => 'Aggiungi una nuova lista' , 
	'LIST_NAME' => 'Nome elenco' , 
	'OINDEX_CFG_SETUP' => 'Configura indice argomenti ufficiale' , 
	'OVERFLOW_IN_TOPIC' => 'Consenti barra di scorrimento nell-elenco degli argomenti interni' , 
	'NAME_FORUM_LIST_EMPTY' => 'Il nome dell-elenco non può essere vuoto.' , 
	'SELECT_FORUM_LIST_EMPTY' => 'Deve essere selezionato almeno un forum.' , 
	'OINDEX_ADDED_LIST' => 'Elenco salvato con successo.' , 
	'OINDEX_DELETED_LIST' => 'Elenco cancellato con successo.' , 
	'OINDEX_EDIT_CFG' => 'Configurazione dell-indice ufficiale degli argomenti modificata con successo.' , 
	'OINDEX_FORUMS' => 'Forum' , 
	'OINDEX_SELECT_FORUM' => 'Seleziona un forum' , 
	'OTINDEX_LIST_ALONE_DSC' => 'Crea un elenco esterno di tutti gli argomenti di un singolo forum o di un insieme di forum insieme. Elenca invece in un topic, quello esterno non necessita di essere attivato direttamente nel forum ma in tal caso verranno elencati tutti i topic senza possibilità di scelta.' , 
	'OTINDEX_LIST_INTOPIC_DSC' => 'Crea un elenco di argomenti organizzato che apparirà all-interno di un argomento scelto. Una volta attivata questa funzione in tutti i primi post di ogni argomento appariranno nuove icone per inserire o rimuovere l-argomento dalla lista.' , 
	'ACTIVE_TOPIC_INDEX' => 'Attivo e seleziona l-argomento per la lista' , 
	'TOPIC_INDEX_DEFAULT' => 'Scegli quali argomenti aggiungere per impostazione predefinita.' , 
	'ACTIVE_TOPIC_INDEX_EXPLAIN' => 'Scegli l-argomento da <strong>sticky o annuncia</strong> gli argomenti diventeranno l-elenco. Quindi devi avere almeno un argomento sul forum.' , 
	'TOPIC_INDEX_DEFAULT_EXPLAIN' => 'Scegli il sistema con cui gli argomenti verranno inclusi nell-elenco' , 
	'ACTIVE_INDEX_FILTER' => 'Filtro tag attivo' , 
	'ACTIVE_INDEX_FILTER_EXPLAIN' => 'Devi attivarlo se hai argomenti con TAG comuni sul titolo. Supportiamo tag con questo formato singolo o doppio: <strong>[]</strong>,<strong>{}</strong>,<strong>()</strong>.' , 
));
