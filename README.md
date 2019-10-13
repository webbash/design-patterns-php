# Паттерны на PHP
### Abstract Factory (Абстрактная фабрика)
Пример представляет собой инструмент сравнения мультимедийных систем, каждая мультимедийная система содержит:
1. Монитор
2. Колонки
3. Сабвуфер

Для каждого устройства описан свой интерфейс в папке `AbstractFactory/MultimediaSystems`.

Для всех мультимедиа систем (фабрик) есть интерфейс `AbstractFactory/Factories/MultimediaSystemFactoryInterface`.

Разные мультимедиа системы хранятся в папке `AbstractFactory/MultimediaSystems/` (LG, Sony).

Сценарий использования приведен в папке `AbstractFactory/index.php` 
