import zipfile
import xml.etree.ElementTree as ET

def read_docx(path):
    try:
        with zipfile.ZipFile(path) as docx:
            tree = ET.XML(docx.read('word/document.xml'))
            namespaces = {'w': 'http://schemas.openxmlformats.org/wordprocessingml/2006/main'}
            text = []
            for paragraph in tree.iterfind('.//w:p', namespaces):
                texts = [node.text for node in paragraph.iterfind('.//w:t', namespaces) if node.text]
                if texts:
                    text.append(''.join(texts))
            return '\n'.join(text)
    except Exception as e:
        return str(e)

if __name__ == '__main__':
    content = read_docx(r'c:\Users\cristian\Downloads\Guia_Laravel_ADSO_v2.docx')
    with open(r'c:\Users\cristian\Desktop\mi-primer-laravel\guia_laravel.txt', 'w', encoding='utf-8') as f:
        f.write(content)
