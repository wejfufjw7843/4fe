<?php
# Создаем глобальную переменную
global_variable = 0

def change_global_variable():
    # Изменяем значение глобальной переменной внутри функции
    global global_variable
    global_variable += 1

# Выводим значение переменной до вызова функции
print("Значение переменной до вызова функции:", global_variable)

# Вызываем функцию
change_global_variable()

# Выводим значение переменной после вызова функции
print("Значение переменной после вызова функции:", global_variable)
?>