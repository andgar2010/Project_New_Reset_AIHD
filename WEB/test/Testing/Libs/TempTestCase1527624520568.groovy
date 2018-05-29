import com.kms.katalon.core.main.TestCaseMain
import com.kms.katalon.core.logging.KeywordLogger
import groovy.lang.MissingPropertyException
import com.kms.katalon.core.testcase.TestCaseBinding
import com.kms.katalon.core.driver.internal.DriverCleanerCollector
import com.kms.katalon.core.model.FailureHandling
import com.kms.katalon.core.configuration.RunConfiguration
import com.kms.katalon.core.webui.contribution.WebUiDriverCleaner
import com.kms.katalon.core.mobile.contribution.MobileDriverCleaner


DriverCleanerCollector.getInstance().addDriverCleaner(new com.kms.katalon.core.webui.contribution.WebUiDriverCleaner())
DriverCleanerCollector.getInstance().addDriverCleaner(new com.kms.katalon.core.mobile.contribution.MobileDriverCleaner())


RunConfiguration.setExecutionSettingFile('C:\\Users\\SENA~1.DES\\AppData\\Local\\Temp\\Katalon\\Test Cases\\01 Ingreso Usuario\\01.04 Ingreso Usuario Profesor\\20180529_150840\\execution.properties')

TestCaseMain.beforeStart()

        TestCaseMain.runTestCase('Test Cases/01 Ingreso Usuario/01.04 Ingreso Usuario Profesor', new TestCaseBinding('Test Cases/01 Ingreso Usuario/01.04 Ingreso Usuario Profesor', [:]), FailureHandling.STOP_ON_FAILURE , false)
    
