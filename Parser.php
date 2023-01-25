<?php

class Parser {

    private $data;

    public function __construct(string $data)
    {
        $this->data = $data;
    }

    public function getWords(): array
    {
        return preg_split('/\s+/', $this->data);
    }

    public function getLines(): array
    {
        return explode("\n", $this->data);
    }

    public function getJSON(): ?stdClass
    {
        return json_decode($this->data);
    }

    public function getXML(): ?SimpleXMLElement
    {
        return simplexml_load_string($this->data);
    }

    public function getCSV(): array
    {
        $rows = [];
        $handle = fopen("php://memory", "r+");
        fwrite($handle, $this->data);
        rewind($handle);

        while (($data = fgetcsv($handle)) !== false) {
            $rows[] = $data;
        }
        fclose($handle);
        return $rows;
    }

    public function getUrlEncoded(): array
    {
        parse_str($this->data, $output);
        return $output;
    }

    public function getRegexMatch(string $pattern): array
    {
        preg_match_all($pattern, $this->data, $matches);
        return $matches;
    }
}
