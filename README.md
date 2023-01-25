# Parser
PHP Parser Class

## Example Usage

```php
$parser = new Parser("This is a sample text for parsing.\nIt has two lines.");
$words = $parser->getWords();
print_r($words);

$lines = $parser->getLines();
print_r($lines);

$json = '{"name":"John", "age":30, "city":"New York"}';
$parser = new Parser($json);
$data = $parser->getJSON();
print_r($data);

$xml = '<root><element>Text</element></root>';
$parser = new Parser($xml);
$xml_data = $parser->getXML();
print_r($xml_data);

$csv = "name,age,city\nJohn,30,New York\nMike,35,Chicago\n";
$parser = new Parser($csv);
$csv_data = $parser->getCSV();
print_r($csv_data);

$urlencoded = "name=John&age=30&city=New%20York";
$parser = new Parser($urlencoded);
$urlencoded_data = $parser->getUrlEncoded();
print_r($urlencoded_data);

$regex = '/[A-Z]\w+/';
$parser = new Parser("This is a sample text for parsing. It has two lines.");
$regex_match = $parser->getRegexMatch($regex);
print_r($regex_match);
```
