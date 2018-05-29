import com.kms.katalon.core.logging.KeywordLogger
import com.kms.katalon.core.exception.StepFailedException
import com.kms.katalon.core.reporting.ReportUtil
import com.kms.katalon.core.main.TestCaseMain
import com.kms.katalon.core.testdata.TestDataColumn
import groovy.lang.MissingPropertyException
import com.kms.katalon.core.testcase.TestCaseBinding
import com.kms.katalon.core.driver.internal.DriverCleanerCollector
import com.kms.katalon.core.model.FailureHandling
import com.kms.katalon.core.configuration.RunConfiguration
import static com.kms.katalon.core.testcase.TestCaseFactory.findTestCase
import static com.kms.katalon.core.testobject.ObjectRepository.findTestObject
import static com.kms.katalon.core.testdata.TestDataFactory.findTestData

Map<String, String> suiteProperties = new HashMap<String, String>();


suiteProperties.put('id', 'Test Suites/Test Auth Users')

suiteProperties.put('name', 'Test Auth Users')

suiteProperties.put('description', '')
 

DriverCleanerCollector.getInstance().addDriverCleaner(new com.kms.katalon.core.webui.contribution.WebUiDriverCleaner())
DriverCleanerCollector.getInstance().addDriverCleaner(new com.kms.katalon.core.mobile.contribution.MobileDriverCleaner())



RunConfiguration.setExecutionSettingFile("C:\\xampp\\htdocs\\Project_New_Reset_AIHD\\WEB\\test\\Testing\\Reports\\Test Auth Users\\20180529_173019\\execution.properties")

TestCaseMain.beforeStart()

TestCaseMain.startTestSuite('Test Suites/Test Auth Users', suiteProperties, [new TestCaseBinding('Test Cases/01 Ingreso Usuario/01.01 Ingreso Usuario SuperAdministrador', 'Test Cases/01 Ingreso Usuario/01.01 Ingreso Usuario SuperAdministrador',  null), new TestCaseBinding('Test Cases/01 Ingreso Usuario/01.02 Ingreso Usuario Tecnico', 'Test Cases/01 Ingreso Usuario/01.02 Ingreso Usuario Tecnico',  null), new TestCaseBinding('Test Cases/01 Ingreso Usuario/01.03 Ingreso Usuario Administrativo', 'Test Cases/01 Ingreso Usuario/01.03 Ingreso Usuario Administrativo',  null), new TestCaseBinding('Test Cases/01 Ingreso Usuario/01.04 Ingreso Usuario Profesor', 'Test Cases/01 Ingreso Usuario/01.04 Ingreso Usuario Profesor',  null)])
