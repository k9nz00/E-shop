<?php

/**
 * Выводит информацию о успешности/неуспешности создания таблицы
 * @param string $tableName
 * @param $result
 */
function getCreationTableInfo(string $tableName, $result)
{
    if ($result) {
        echo 'таблица '.$tableName.' успешно создана!' . PHP_EOL . '<br>';
    } else {
        echo 'При создании таблицы '.$tableName.' произошла ошибка!' . PHP_EOL . '<br>';
    }
}