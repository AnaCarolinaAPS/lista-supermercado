import { useEffect } from "react";
import { useTheme } from "./hooks/theme";
import { ThemeProvider } from "styled-components";
import { lightTheme } from "./themes/lightTheme";
import { darkTheme } from "./themes/darkTheme";
import { MainRoutes } from "./routes";

function App() {
    const { handleInitTheme, theme } = useTheme()
    
    useEffect(() => {
        // Apply theme saved by user to local storage
        handleInitTheme()
    }, [])

    return (
        <ThemeProvider theme={theme == 'light' ? lightTheme : darkTheme}>
            <MainRoutes>
                
            </MainRoutes>
        </ThemeProvider>
    )
}

export default App
