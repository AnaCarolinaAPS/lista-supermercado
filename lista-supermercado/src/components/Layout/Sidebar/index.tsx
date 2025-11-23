import { useState } from "react"
import { useLocation } from "react-router-dom"
import { Container, Footer, Header, HeaderIcon, HeaderLogo, Navigation, NavigationItem, NavigationItemIcon, NavigationItemLabel, User, UserAvatar, UserName, Link } from "./styles"
import { Button } from "../../Button"
import { MdOutlineEmojiFoodBeverage, MdOutlineListAlt, MdOutlineShoppingCart } from "react-icons/md"

const menuItems = [
    { label: 'Minha Lista', url: '/', icon: <MdOutlineListAlt /> },
    { label: 'Produtos', url: '/products', icon: <MdOutlineEmojiFoodBeverage /> },
    { label: 'Histórico', url: '/history', icon: <MdOutlineShoppingCart /> },
]

export const Sidebar = () => {
    const [isExpanded, setIsExpanded] = useState(true)

    const { pathname } = useLocation()

    const handleToggleExpand = () => setIsExpanded(!isExpanded)

    return (
        <Container $expanded={isExpanded}>
            <Header>
                {isExpanded &&
                    <Link to='/'>
                        <HeaderLogo
                            src="/logo.png"
                            alt="Logo Image"
                        />
                    </Link>
                }

                <Button onClick={handleToggleExpand} borderRadius="rounded">
                    <HeaderIcon />
                </Button>
            </Header>

            <Navigation>
                {menuItems.map((item, key) => (
                    <Link to={item.url} key={key}>
                        <NavigationItem $isActive={pathname == item.url}>
                            <NavigationItemIcon>
                                {item.icon}
                            </NavigationItemIcon>
                            <NavigationItemLabel>
                                {item.label}
                            </NavigationItemLabel>
                        </NavigationItem>
                    </Link>
                ))}
            </Navigation>

            <Footer>
                <Link to='/account'>
                    <User $isActive={pathname == '/account'}>
                        <UserAvatar>
                            AN
                        </UserAvatar>
                        <UserName>
                            Ana Carolina
                        </UserName>
                    </User>
                </Link>
            </Footer>
        </Container>
    )
}