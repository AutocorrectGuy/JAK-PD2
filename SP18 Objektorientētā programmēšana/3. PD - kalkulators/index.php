<?php
/**
 * - Kalkulatora lietojams izmantojot statiskās funkcijas norādot matemātisko
 * funkciju un divus sekojošos skaitļus piemēram:
 *    Kalkulators::print('sum', 10, 3);
 * - Funkciju (matemātisko operāciju) saraksts pieejams Kalkulatora klasē 
 * const mainīgajā OPERATIONS_WHITELIST (kopā izmantojamas 6 funkcijas). 
 * - Ja tiek ievadīta nekorekts matemātiskais operators, tiek izvadīts kļudas
 * paziņojums un iespējamo maemātisko operatorāciju saraksts, kuru jālieto kā
 * pirmo argumentu. 
 */

require_once("./Calculator.class.php");

// Using calculator class (without trait):
print(Calculator::calculate('modulus', 10, 6) . '<br />');
// Using calculator class (with trait):
Calculator::printCalculation('divide', 10, 4);
// Using wrong math operation: 
Calculator::printCalculation('modelis', 10, 3);