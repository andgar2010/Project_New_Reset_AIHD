import static com.kms.katalon.core.checkpoint.CheckpointFactory.findCheckpoint
import static com.kms.katalon.core.testcase.TestCaseFactory.findTestCase
import static com.kms.katalon.core.testdata.TestDataFactory.findTestData
import static com.kms.katalon.core.testobject.ObjectRepository.findTestObject
import com.kms.katalon.core.checkpoint.Checkpoint as Checkpoint
import com.kms.katalon.core.checkpoint.CheckpointFactory as CheckpointFactory
import com.kms.katalon.core.mobile.keyword.MobileBuiltInKeywords as MobileBuiltInKeywords
import com.kms.katalon.core.mobile.keyword.MobileBuiltInKeywords as Mobile
import com.kms.katalon.core.model.FailureHandling as FailureHandling
import com.kms.katalon.core.testcase.TestCase as TestCase
import com.kms.katalon.core.testcase.TestCaseFactory as TestCaseFactory
import com.kms.katalon.core.testdata.TestData as TestData
import com.kms.katalon.core.testdata.TestDataFactory as TestDataFactory
import com.kms.katalon.core.testobject.ObjectRepository as ObjectRepository
import com.kms.katalon.core.testobject.TestObject as TestObject
import com.kms.katalon.core.webservice.keyword.WSBuiltInKeywords as WSBuiltInKeywords
import com.kms.katalon.core.webservice.keyword.WSBuiltInKeywords as WS
import com.kms.katalon.core.webui.keyword.WebUiBuiltInKeywords as WebUiBuiltInKeywords
import com.kms.katalon.core.webui.keyword.WebUiBuiltInKeywords as WebUI
import internal.GlobalVariable as GlobalVariable
import org.openqa.selenium.Keys as Keys

WebUI.openBrowser('')

WebUI.navigateToUrl('http://localhost:3000/Project_New_Reset_AIHD/WEB/views/dashboard.php')

WebUI.click(findTestObject('Page_New Reset AIHD Admin Dashboard/span_Gestin de usuarios'))

WebUI.click(findTestObject('Page_New Reset AIHD Admin Dashboard/button_Agregar usuario'))

WebUI.click(findTestObject('Page_Registro nuevo usuario/label_CC'))

WebUI.setText(findTestObject('Page_Registro nuevo usuario/input_num_cedula'), '379164285')

WebUI.setText(findTestObject('Page_Registro nuevo usuario/input_nombre'), 'Felipe')

WebUI.setText(findTestObject('Page_Registro nuevo usuario/input_apellido'), 'Ramirez')

WebUI.setText(findTestObject('Page_Registro nuevo usuario/input_email'), 'fr@gmail.com')

WebUI.click(findTestObject('Page_Registro nuevo usuario/label_Masculino'))

WebUI.selectOptionByValue(findTestObject('Page_Registro nuevo usuario/select_------ Seleccionar ----'), '4', true)

WebUI.selectOptionByValue(findTestObject('Page_Registro nuevo usuario/select_------ Seleccionar ----_1'), '3', true)

WebUI.selectOptionByValue(findTestObject('Page_Registro nuevo usuario/select_------ Seleccionar ----_2'), '3', true)

WebUI.click(findTestObject('Page_Registro nuevo usuario/button_Crear nuevo usuario'))

WebUI.closeBrowser()

